var $=require("common:widget/lib/gmu/zepto/zepto.js"),toast=require("common:widget/ui/toast/toast.js"),validator=require("common:widget/ui/validator/validator.js").getInstance();$(function(){function e(e,t,i){if(this._orderContext=$("form"),this.dealType=parseInt(F.context("dealType"),10),this._max=t,this._min=e,this._unit=i,this._numbers=[],this._shopSize=$(".j-product-number").size(),this.isDealOptions=$(".j-deal-options").size()>0,1==this._shopSize)this._numbers.push(1),this._groupMin=1;else if(this._shopSize>1){for(var n=0,o=this._shopSize;o>n;n++)this._numbers.push(0);this._groupMin=0}2==this.dealType&&(this.originDeliveryCost=parseInt(F.context("deliveryCost"),10),this.realDeliveryCost=this.originDeliveryCost,this.originPostageText=$(".j-postage-text").text(),this.freePostageText="（已包邮）",this.freeCount=parseInt(F.context("freeCount"),10)),this._sendCodeUrl="/webapp/user/loginsmscode",this._countDownTime=60,this._privilegeUrl="/webapp/pay/promotion",this._fechPrivilegeTimeOut=600,this._itemId=F.context("itemId"),this._privilegeMoney=parseInt(F.context("privilegeMoney"),10),this._isPrivilege=F.context("isPrivilege"),this._countDownTime=60}document.getElementById("j-order-form-refresh").reset(),e.prototype.init=function(){2==this.dealType&&(this.bindEventOnChooseDeliveryAddress(),this.bindEventOnChooseDeliveryType()),this.bindEventOnDealNumberChange(),this.bindEventOnSendCodeBtn(),this.bindEventOnSubmitForm()},e.prototype.fetchPrivilegeInfo=function(){var e=this,t=this.getTotalDealNumber();e._isPrivilege||e.updateTotalPrice(),clearTimeout(l);var i={num:t,itemId:e._itemId},n="最多可优惠<span class='common-color-pink'>&yen;{1}</span>",o="最多可返<span class='common-color-pink'>&yen;{1}</span>",a=[],r=$(".j-privilege-info"),s=$(".j-privilege-detail"),l=setTimeout(function(){$.post(e._privilegeUrl,i,function(t){var i=t.data.privilegeInfo;i&&0==t.errno?(i.privilegeMoney&&(a.push(n.replace("{1}",i.privilegeMoney/1e3)),e._privilegeMoney=i.privilegeMoney),i.returnMoney&&a.push(o.replace("{1}",i.returnMoney/1e3)),a.length>0?(s.html(a.join("，")).show(),r.show()):(e._privilegeMoney=0,r.hide())):(e._privilegeMoney=0,r.hide()),e.updateTotalPrice()},"json")},e._fechPrivilegeTimeOut)},e.prototype.handleBrowserCache=function(){var e=this;if(e.updateTotalPrice(),2==e.dealType){var t=$(".j-delivery-address"),i="delivery-address-checked",n=$(".j-delivery-type"),o=$("input[name='deliveryType']"),a=$("input[name='addressId']");t.each(function(){$(this).hasClass(i)&&a.val($(this).data("type"))}),n.each(function(){$(this).find("dd").hasClass("icon-checked")&&o.val($(this).data("type"))})}},e.prototype.bindEventOnSubmitForm=function(){var e=this,t=$(".j-order-submit");e._orderContext.on("submit",function(){if(e.checkUserLoginForLightApp()===!1)return!1;if(e.handleBrowserCache(),$("input[name='rand']").val((new Date).getTime()),e._max<=0)return t.addClass("forbid-buy"),t.val("不能购买"),toast.create("你已达到最大购买件数，不能购买啦"),!1;if(e.validateDealNumber()===!1)return!1;var i=$(".j-phone-number"),n=$(".j-msg-code"),o=$("input[name='mobile']");if(i.size()>0&&n.size()>0){var a=i.val().trim(),r=n.val().trim();if(e.validatePhoneNumerAndCodeNumber(a,r)===!1)return!1}else if(o.size()>0&&e.validateBindMobilePhone(o.val().trim())===!1)return!1;return 2==e.dealType&&e.validateDeliveryAddress()===!1?!1:(e.isDealOptions&&e.serializeDealOptions(),void 0)})},e.prototype.checkUserLoginForLightApp=function(){if("baiduboxapp"!==F.context("channel")||F.context("isLogin")===!0)return!0;var e=window.location;return e.href="/webapp/user/login?backUrl="+encodeURIComponent(e.pathname+e.search),!1},e.prototype.validateDealNumber=function(){var e=this,t=e.getTotalDealNumber();return e._min<=t&&t<=e._max?!0:(toast.create("该商品限购"+e._min+"到"+e._max+"件，请重新选择商品数量"),!1)},e.prototype.validatePhoneNumerAndCodeNumber=function(e,t){var i={phone:e},n={smscode:t};return validator.validate(i)?validator.validate(n)?!0:(toast.create("请输入正确的验证码"),!1):(toast.create("请输入正确的手机号"),!1)},e.prototype.validateBindMobilePhone=function(e){return 0===e.length?(toast.create("你还没有绑定手机号，请先绑定手机号"),window.location.href=a,!1):!0},e.prototype.validateDeliveryAddress=function(){return 0===$(".j-delivery-address").size()?(toast.create("您还没有收货地址，请先添加收货地址"),!1):!0},e.prototype.serializeDealOptions=function(){var e=$(".j-product-number"),t=e.find("input"),i={},n=$("input[name='dealOptions']");t.each(function(){var e=$(this).data("name"),t=$.trim(this.value);i[e]=t}),n.val(JSON.stringify(i))},e.prototype.bindEventOnSendCodeBtn=function(){var e=this;0!==e._orderContext.find(".j-code").size()&&e._orderContext.on("tap",".j-code",function(){var t=$(this);if(!t.hasClass("code-clicked")){var i=$(".j-phone-number").val().trim(),n=e._countDownTime+1,o=function(){n--,0>=n?t.removeClass("code-clicked").addClass("code-no-clicked").val("重新发送"):(t.val(n+"秒后重发"),setTimeout(o,1e3))};e.validatePhoneNumber(i)&&(e.sendVerificationCode(i),t.removeClass("code-no-clicked").addClass("code-clicked"),o())}})},e.prototype.validatePhoneNumber=function(e){var t=$(".j-error-tip"),i={phone:e},n=validator.validate(i);return n?(t.hide(),!0):(t.show().text("请输入正确的手机号码"),!1)},e.prototype.sendVerificationCode=function(e){var t=this,i={mobile:e};$.post(t._sendCodeUrl,i,function(e){if(0==e.errno)toast.create("验证码已发到您手机，注意查收");else{var t=$(".j-error-tip");t.show().text(e.msg)}},"json")},e.prototype.bindEventOnDealNumberChange=function(){var e=this;e._orderContext.on("focusout",".j-number",function(){e.onDealNumberChange($(this))}),e._orderContext[0].addEventListener("tap",function(t){var i=t.target,n=t.currentTarget,o=$(i).closest(".j-linkage",n);0!==o.length&&e.onTapPlusOrMinusBtn(o)})},e.prototype.onTapPlusOrMinusBtn=function(e){var t=this;if(e.hasClass("plus-disabled")||e.hasClass("minus-disabled"))return!1;var i=e.siblings("input"),n=parseInt(i.val().trim(),10),o=e.hasClass("plus");o?n+=1:n-=1,t.updateInputValue(i,n)},e.prototype.onDealNumberChange=function(e){var t=this,i=e.closest(".j-product-number").data("buylimit"),n=parseInt(e.val().trim(),10),o={number:n},a=validator.validate(o),r=t.getCurrentInputIndex(e);if(!a||isNaN(n))return t.updateInputValue(e,t._groupMin),toast.create("请输入合法的数量，至少为"+t._groupMin+"件"),void 0;var s=Math.max(t._max-t.getTotalDealNumberExcept(r),0);return n>i&&s>n?(t.updateInputValue(e,i),toast.create("该套餐最多可购买"+i+"件"),void 0):n>s&&s>i?(t.updateInputValue(e,i),toast.create("该套餐最多可购买"+i+"件"),void 0):n>s&&i>=s?(t.updateInputValue(e,s),toast.create("最多可购买"+t._max+"件"),void 0):n<t._groupMin?(t.updateInputValue(e,t._groupMin),toast.create("请输入正确的数量，至少为"+t._groupMin+"件"),void 0):n>=t._groupMin&&i>=n&&s>=n?(t.updateInputValue(e,n),void 0):void 0},e.prototype.updateInputValue=function(e,t){var i=this,n=i.getCurrentInputIndex(e);e.val(t),i._numbers[n]=t,$("input[name='count']").val(i.getTotalDealNumber()),i.updataDealBtnStatus(e),i.updateDeliveryCost(),i.fetchPrivilegeInfo()},e.prototype.getCurrentInputIndex=function(e){return e.closest(".j-product-number").index()},e.prototype.updataDealBtnStatus=function(e){var t=this,i=t.getTotalDealNumber(),n=parseInt(e.val().trim(),10),o=$(".j-product-number .plus");if(i==t._max){var a=e.siblings(".minus");o.removeClass("plus-active"),o.addClass("plus-disabled"),0!=n&&i!=t._groupMin&&(a.removeClass("minus-disabled"),a.addClass("minus-active"))}i<t._max&&o.each(function(){var e=$(this),i=e.siblings(".minus"),n=e.siblings("input"),o=n.closest(".j-product-number").data("buylimit"),a=parseInt($.trim(n.val()),10);a==t._groupMin&&(i.removeClass("minus-active"),i.addClass("minus-disabled")),a>t._groupMin&&o>=a&&(i.addClass("minus-active"),i.removeClass("minus-disabled")),a==o&&(e.removeClass("plus-active"),e.addClass("plus-disabled")),o>a&&(e.addClass("plus-active"),e.removeClass("plus-disabled"))})},e.prototype.updateDeliveryCost=function(){if(2===this.dealType){var e=this,t=$(".j-postage-text"),i=$(".j-delivery-cost"),n=$("input[name='deliveryCost']"),o=e.getTotalDealNumber();o>=e.freeCount?(e.realDeliveryCost=0,i.text(0),n.val(0),t.text(e.freePostageText)):(e.realDeliveryCost=e.originDeliveryCost,i.text(e.realDeliveryCost/1e3),n.val(e.realDeliveryCost),t.text(e.originPostageText))}},e.prototype.updateTotalPrice=function(){var e=this,t=this.getTotalDealNumber(),i=$(".j-total-price"),n=$(".j-amount-price"),o=$("input[name='totalMoney']"),a=0;2==e.dealType&&(a=e.realDeliveryCost),n.text(e._unit*t/1e3),0==t?(i.text(0),o.val(0)):(i.text((e._unit*t+a-e._privilegeMoney)/1e3),o.val(e._unit*t+a))},e.prototype.getTotalDealNumber=function(){for(var e=this,t=0,i=0,n=e._numbers.length;n>i;i++)t+=e._numbers[i];return t},e.prototype.getTotalDealNumberExcept=function(e){return this.getTotalDealNumber()-this._numbers[e]},e.prototype.bindEventOnChooseDeliveryAddress=function(){if(2===this.dealType){var e=$(".j-delivery-address"),t="delivery-address-checked";e.on("tap",function(){var i=$(this);i.hasClass(t)||(e.removeClass(t),i.addClass(t))})}},e.prototype.bindEventOnChooseDeliveryType=function(){if(2===this.dealType){var e=$(".j-delivery-type");e.on("tap",function(){e.find("dd").removeClass("icon-checked"),e.find("dd").addClass("icon-no-checked"),$(this).find("dd").removeClass("icon-no-checked"),$(this).find("dd").addClass("icon-checked")})}};var t=parseInt(F.context("userBuyUpperLimit"),10),i=parseInt(F.context("userDealBuyCount"),10),n=parseInt(F.context("userBuyLowerLimit"),10),o=parseInt(F.context("promoPrice"),10),a=F.context("bindPhoneUrl"),r=new e(n,t-i,o);r.init()});