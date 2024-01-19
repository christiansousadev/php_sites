(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([[32],{"45cb":function(t,i,e){"use strict";e.r(i);var a=function(){var t=this,i=t.$createElement,e=t._self._c||i;return e("q-scroll-area",{staticClass:"full-height full-width"},[e("div",{staticClass:"q-pa-lg "},[e("div",{staticClass:"row q-mb-md"},[e("div",{directives:[{name:"t",rawName:"v-t",value:"TWOFACTORAUTH.HEADING_SETTINGS_TAB",expression:"'TWOFACTORAUTH.HEADING_SETTINGS_TAB'"}],staticClass:"col text-h5"})]),e("q-card",{staticClass:"card-edit-settings",attrs:{flat:"",bordered:""}},[e("q-card-section",[e("div",{staticClass:"row"},[e("div",{staticClass:"col-8"},[e("q-item-label",{attrs:{caption:""}},[e("div",{domProps:{innerHTML:t._s(t.inscriptionTwoFactorAuthentication)}})])],1)]),t.twoFactorAuthEnabled?e("div",{staticClass:"row q-mt-md"},[e("div",{staticClass:"col-8"},[e("q-btn",{staticClass:"q-px-xs",attrs:{unelevated:"","no-caps":"","no-wrap":"",dense:"",ripple:!1,color:"primary",label:t.$t("TWOFACTORAUTH.ACTION_DISABLE_TFA")},on:{click:t.showTwoFactorAuthenticationDialogue}})],1)]):t._e()])],1)],1),e("q-dialog",{attrs:{persistent:""},model:{value:t.confirmTwoFactorAuthentication,callback:function(i){t.confirmTwoFactorAuthentication=i},expression:"confirmTwoFactorAuthentication"}},[e("q-card",{staticStyle:{"min-width":"300px"}},[e("q-card-section",[e("span",{domProps:{innerHTML:t._s(t.confirmDisableTwoFactorAuthentication)}})]),e("q-card-actions",{attrs:{align:"right"}},[e("q-btn",{staticClass:"q-px-sm",attrs:{unelevated:"","no-caps":"",dense:"",ripple:!1,color:"primary",label:t.$t("TWOFACTORAUTH.ACTION_DISABLE_TFA")},on:{click:t.disableTwoFactorAuthentication}}),e("q-btn",{staticClass:"q-px-sm",attrs:{unelevated:"","no-caps":"",dense:"",ripple:!1,color:"primary",label:t.$t("COREWEBCLIENT.ACTION_CANCEL")},on:{click:function(i){t.confirmTwoFactorAuthentication=!1}}})],1)],1)],1),e("q-inner-loading",{staticStyle:{"justify-content":"flex-start"},attrs:{showing:t.loading||t.saving}},[e("q-linear-progress",{attrs:{query:""}})],1)],1)},o=[],n=e("e539"),s=e("21ac"),r=e("4245"),c=e("6bfe"),u=e("b2f5"),l=e.n(u),d=e("11cb"),T={name:"TwoFactorAuthAdminSettingsPerUser",data:function(){return{user:null,loading:!1,saving:!1,twoFactorAuthEnabled:!1,confirmTwoFactorAuthentication:!1}},computed:{inscriptionTwoFactorAuthentication:function(){var t,i;return this.twoFactorAuthEnabled?this.$tc("TWOFACTORAUTH.INFO_TFA_ENABLED_FOR_USER",0,{USER:null===(t=this.user)||void 0===t?void 0:t.publicId}):this.$tc("TWOFACTORAUTH.INFO_TFA_DISABLED_FOR_USER",0,{USER:null===(i=this.user)||void 0===i?void 0:i.publicId})},confirmDisableTwoFactorAuthentication:function(){var t;return this.$tc("TWOFACTORAUTH.CONFIRM_DISABLE_TFA",0,{USER:null===(t=this.user)||void 0===t?void 0:t.publicId})}},watch:{$route:function(t,i){this.parseRoute()}},mounted:function(){this.parseRoute()},methods:{disableTwoFactorAuthentication:function(){var t=this,i={UserId:this.user.id,TenantId:this.user.tenantId};n["a"].sendRequest({moduleName:"TwoFactorAuth",methodName:"DisableUserTwoFactorAuth",parameters:i}).then((function(i){t.confirmTwoFactorAuthentication=!1,i?(t.populate(),s["a"].showReport(t.$tc("TWOFACTORAUTH.REPORT_DISABLE_USER_TFA",t.user.publicId,{USER:t.user.publicId}))):s["a"].showError(t.$tc("TWOFACTORAUTH.ERROR_DISABLE_USER_TFA",t.user.publicId,{USER:t.user.publicId}))}),(function(i){t.confirmTwoFactorAuthentication=!1,s["a"].showError(r["a"].getTextFromResponse(i,t.$tc("TWOFACTORAUTH.ERROR_DISABLE_USER_TFA",t.user.publicId,{USER:t.user.publicId})))}))},showTwoFactorAuthenticationDialogue:function(){this.confirmTwoFactorAuthentication=!0},parseRoute:function(){var t,i,e,a=c["a"].pPositiveInt(null===(t=this.$route)||void 0===t||null===(i=t.params)||void 0===i?void 0:i.id);(null===(e=this.user)||void 0===e?void 0:e.id)!==a&&(this.user={id:a},this.populate())},populate:function(){var t=this;this.loading=!0;var i=this.$store.getters["tenants/getCurrentTenantId"];d["a"].getUser(i,this.user.id).then((function(i){var e=i.user,a=i.userId;a===t.user.id&&(t.loading=!1,e&&l.a.isFunction(null===e||void 0===e?void 0:e.getData)?(t.user=e,t.getUserSettings()):t.$emit("no-user-found"))}))},getUserSettings:function(){var t=this;this.loading=!0;var i={UserId:this.user.id,TenantId:this.user.tenantId};n["a"].sendRequest({moduleName:"TwoFactorAuth",methodName:"GetUserSettings",parameters:i}).then((function(i){t.loading=!1,i&&(t.twoFactorAuthEnabled=null===i||void 0===i?void 0:i.TwoFactorAuthEnabled)}),(function(i){t.loading=!1,s["a"].showError(r["a"].getTextFromResponse(i))}))}}},h=T,A=e("2877"),p=e("4983"),F=e("f09f"),m=e("a370"),w=e("0170"),v=e("9c40"),f=e("24e8"),R=e("4b7e"),b=e("74f7"),E=e("6b1d"),I=e("eebe"),g=e.n(I),C=Object(A["a"])(h,a,o,!1,null,"dddf621e",null);i["default"]=C.exports;g()(C,"components",{QScrollArea:p["a"],QCard:F["a"],QCardSection:m["a"],QItemLabel:w["a"],QBtn:v["a"],QDialog:f["a"],QCardActions:R["a"],QInnerLoading:b["a"],QLinearProgress:E["a"]})}}]);