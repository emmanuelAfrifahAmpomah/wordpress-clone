jQuery(window).on("elementor:init",(function(){"use strict";var e=elementor.modules.controls.BaseData.extend({onReady:function(){var e=this,t=e.ui.select,a=t.attr("data-ajax-url"),n=window.wpApiSettings.nonce;t.select2({ajax:{url:a,dataType:"json",headers:{"X-WP-Nonce":n},data:function(e){return{s:e.term}}},cache:!0});var r=void 0!==e.getControlValue()?e.getControlValue():"";r.isArray&&(r=e.getControlValue().join()),jQuery.ajax({url:a,dataType:"json",headers:{"X-WP-Nonce":n},data:{ids:String(r)}}).then((function(e){null!==e&&e.results.length>0&&(jQuery.each(e.results,(function(e,a){var n=new Option(a.text,a.id,!0,!0);t.append(n).trigger("change")})),t.trigger({type:"select2:select",params:{data:e}}))}))},onBeforeDestroy:function(){this.ui.select.data("select2")&&this.ui.select.select2("destroy"),this.el.remove()}});elementor.addControlView("ajaxselect2",e)}));