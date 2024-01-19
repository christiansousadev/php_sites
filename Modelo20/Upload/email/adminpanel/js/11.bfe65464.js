(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([[11],{"96ec":function(t,e,s){"use strict";var a=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("q-dialog",{attrs:{persistent:""},model:{value:t.confirm,callback:function(e){t.confirm=e},expression:"confirm"}},[s("q-card",{staticStyle:{"min-width":"300px"}},[s("q-card-section",{staticClass:"q-pb-none"},[s("div",{directives:[{name:"show",rawName:"v-show",value:t.title,expression:"title"}],staticClass:"text-h6"},[t._v(t._s(t.title))])]),s("q-card-section",[s("span",[t._v(t._s(t.message))])]),s("q-card-actions",{attrs:{align:"right"}},[s("q-btn",{staticClass:"q-px-sm",attrs:{unelevated:"","no-caps":"",dense:"",ripple:!1,color:"primary",label:t.$t("COREWEBCLIENT.ACTION_OK")},on:{click:t.proceed}}),s("q-btn",{staticClass:"q-px-sm",attrs:{unelevated:"","no-caps":"",dense:"",ripple:!1,color:"secondary",label:t.$t("COREWEBCLIENT.ACTION_CANCEL")},on:{click:t.cancel}})],1)],1)],1)},i=[],n=s("c973"),o=s.n(n),r=(s("96cf"),s("2ef0")),l=s.n(r),c=s("6bfe"),d={name:"ConfirmDialog",data:function(){return{title:"",message:"",confirm:!1,okHandler:null}},methods:{openDialog:function(){var t=o()(regeneratorRuntime.mark((function t(e){var s,a,i;return regeneratorRuntime.wrap((function(t){while(1)switch(t.prev=t.next){case 0:s=e.title,a=e.message,i=e.okHandler,c["a"].isNonEmptyString(a)&&(this.title=s,this.message=a,this.confirm=!0,this.okHandler=i);case 2:case"end":return t.stop()}}),t,this)})));function e(e){return t.apply(this,arguments)}return e}(),proceed:function(){l.a.isFunction(this.okHandler)&&this.okHandler(),this.confirm=!1},cancel:function(){this.confirm=!1}}},E=d,N=s("2877"),C=s("24e8"),u=s("f09f"),m=s("a370"),p=s("4b7e"),b=s("9c40"),L=s("eebe"),T=s.n(L),A=Object(N["a"])(E,a,i,!1,null,"71c74599",null);e["a"]=A.exports;T()(A,"components",{QDialog:C["a"],QCard:u["a"],QCardSection:m["a"],QCardActions:p["a"],QBtn:b["a"]})},cb68:function(t,e,s){"use strict";s.r(e);var a=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"full-height full-width"},[s("q-scroll-area",{staticClass:"full-height full-width"},[s("div",{staticClass:"q-pa-lg "},[s("div",{staticClass:"row q-mb-md"},[s("div",{directives:[{name:"t",rawName:"v-t",value:"ADMINPANELWEBCLIENT.HEADING_DB_SETTINGS",expression:"'ADMINPANELWEBCLIENT.HEADING_DB_SETTINGS'"}],staticClass:"col text-h5"})]),s("q-card",{staticClass:"card-edit-settings",attrs:{flat:"",bordered:""}},[s("q-card-section",[s("div",{staticClass:"row q-mb-md"},[s("div",{directives:[{name:"t",rawName:"v-t",value:"ADMINPANELWEBCLIENT.LABEL_DB_LOGIN",expression:"'ADMINPANELWEBCLIENT.LABEL_DB_LOGIN'"}],staticClass:"col-2 q-my-sm"}),s("div",{staticClass:"col-5"},[s("q-input",{attrs:{outlined:"",dense:"","bg-color":"white","border-radius":""},on:{keyup:function(e){return!e.type.indexOf("key")&&t._k(e.keyCode,"enter",13,e.key,"Enter")?null:t.save(e)}},model:{value:t.dbLogin,callback:function(e){t.dbLogin=e},expression:"dbLogin"}})],1)]),s("div",{staticClass:"row q-mb-md"},[s("div",{directives:[{name:"t",rawName:"v-t",value:"ADMINPANELWEBCLIENT.LABEL_DB_PASSWORD",expression:"'ADMINPANELWEBCLIENT.LABEL_DB_PASSWORD'"}],staticClass:"col-2 q-my-sm"}),s("div",{staticClass:"col-5 "},[s("q-input",{attrs:{outlined:"",dense:"","bg-color":"white",type:"password",autocomplete:"new-password"},on:{keyup:function(e){return!e.type.indexOf("key")&&t._k(e.keyCode,"enter",13,e.key,"Enter")?null:t.save(e)}},model:{value:t.dbPassword,callback:function(e){t.dbPassword=e},expression:"dbPassword"}})],1)]),s("div",{staticClass:"row q-mb-md"},[s("div",{directives:[{name:"t",rawName:"v-t",value:"ADMINPANELWEBCLIENT.LABEL_DN_NAME",expression:"'ADMINPANELWEBCLIENT.LABEL_DN_NAME'"}],staticClass:"col-2 q-my-sm"}),s("div",{staticClass:"col-5 "},[s("q-input",{attrs:{outlined:"",dense:"","bg-color":"white"},on:{keyup:function(e){return!e.type.indexOf("key")&&t._k(e.keyCode,"enter",13,e.key,"Enter")?null:t.save(e)}},model:{value:t.dbName,callback:function(e){t.dbName=e},expression:"dbName"}})],1)]),s("div",{staticClass:"row q-mb-md"},[s("div",{directives:[{name:"t",rawName:"v-t",value:"ADMINPANELWEBCLIENT.LABEL_DB_HOST",expression:"'ADMINPANELWEBCLIENT.LABEL_DB_HOST'"}],staticClass:"col-2 q-my-sm"}),s("div",{staticClass:"col-5 "},[s("q-input",{attrs:{outlined:"",dense:"","bg-color":"white"},on:{keyup:function(e){return!e.type.indexOf("key")&&t._k(e.keyCode,"enter",13,e.key,"Enter")?null:t.save(e)}},model:{value:t.dbHost,callback:function(e){t.dbHost=e},expression:"dbHost"}})],1)]),s("div",{staticClass:"row q-mb-xl"},[s("div",{staticClass:"col-2 q-my-sm"}),s("div",{staticClass:"col-5"},[s("q-btn",{staticClass:"q-px-sm",attrs:{unelevated:"","no-caps":"",dense:"",ripple:!1,color:"primary",label:t.$t("ADMINPANELWEBCLIENT.BUTTON_DB_TEST_CONNECTION")},on:{click:t.testDbConnection}})],1)]),s("div",{staticClass:"row q-mb-sm"},[s("div",{staticClass:"col-2 q-my-sm"}),s("div",{staticClass:"col-10"},[s("q-item-label",{directives:[{name:"t",rawName:"v-t",value:"ADMINPANELWEBCLIENT.HINT_DB_CREATE_TABLES",expression:"'ADMINPANELWEBCLIENT.HINT_DB_CREATE_TABLES'"}],attrs:{caption:""}})],1)]),s("div",{staticClass:"row q-mb-md"},[s("div",{staticClass:"col-2 q-my-sm"}),s("div",{staticClass:"col-5"},[t.creatingTables?s("q-btn",{staticClass:"q-px-sm",attrs:{unelevated:"","no-caps":"",dense:"",ripple:!1,color:"primary",label:t.$t("ADMINPANELWEBCLIENT.BUTTON_DB_CREATING_TABLES")}}):s("q-btn",{staticClass:"q-px-sm",attrs:{unelevated:"","no-caps":"",dense:"",ripple:!1,color:"primary",label:t.$t("ADMINPANELWEBCLIENT.BUTTON_DB_CREATE_TABLES")},on:{click:t.askCreateTables}})],1)]),s("div",{staticClass:"row q-mb-sm"},[s("div",{staticClass:"col-2 q-my-sm"}),s("div",{staticClass:"col-10"},[s("q-item-label",{directives:[{name:"t",rawName:"v-t",value:"ADMINPANELWEBCLIENT.HINT_UPDATE_CONFIG",expression:"'ADMINPANELWEBCLIENT.HINT_UPDATE_CONFIG'"}],attrs:{caption:""}})],1)]),s("div",{staticClass:"row"},[s("div",{staticClass:"col-2 q-my-sm"}),s("div",{staticClass:"col-5"},[s("q-btn",{staticClass:"q-px-sm",attrs:{unelevated:"","no-caps":"",dense:"",ripple:!1,color:"primary",label:t.$t("ADMINPANELWEBCLIENT.BUTTON_UPDATE_CONFIG")},on:{click:t.updateConfig}})],1)])])],1),s("div",{staticClass:"q-mt-md text-right"},[s("q-btn",{staticClass:"q-px-sm",attrs:{unelevated:"","no-caps":"",dense:"",ripple:!1,color:"primary",label:t.$t("COREWEBCLIENT.ACTION_SAVE")},on:{click:t.save}})],1)],1)]),s("q-dialog",{model:{value:t.showDialog,callback:function(e){t.showDialog=e},expression:"showDialog"}},[s("q-card",[s("q-card-section",[t._v("\n        "+t._s(t.$t("ADMINPANELWEBCLIENT.INFO_AUTHTOKEN_DB_STORED"))+"\n      ")]),s("q-card-actions",{attrs:{align:"right"}},[s("q-btn",{directives:[{name:"close-popup",rawName:"v-close-popup"}],attrs:{flat:"",label:t.$t("COREWEBCLIENT.ACTION_OK"),color:"primary"}})],1)],1)],1),s("ConfirmDialog",{ref:"confirmDialog"}),s("q-inner-loading",{staticStyle:{"justify-content":"flex-start"},attrs:{showing:t.saving}},[s("q-linear-progress",{attrs:{query:""}})],1)],1)},i=[],n=s("e539"),o=s("83d6"),r=s("21ac"),l=s("4245"),c=s("2ef0"),d=s.n(c),E=s("96ec"),N="      ",C={name:"DbAdminSettingsView",data:function(){return{dbPassword:N,savedPass:N,dbLogin:"",dbName:"",dbHost:"",saving:!1,showDialog:!1,creatingTables:!1,testingConnection:!1,updatingConfiguration:!1}},components:{ConfirmDialog:E["a"]},beforeRouteLeave:function(t,e,s){this.doBeforeRouteLeave(t,e,s)},mounted:function(){this.populate()},computed:{storeAuthTokenInDB:function(){return o["a"].getStoreAuthTokenInDB()}},methods:{hasChanges:function(){var t=o["a"].getDatabaseSettingsData();return this.dbLogin!==t.dbLogin||this.dbName!==t.dbName||this.dbHost!==t.dbHost||this.dbPassword!==this.savedPass},revertChanges:function(){this.populate(),this.dbPassword=this.savedPass},populate:function(){var t=o["a"].getDatabaseSettingsData();this.dbLogin=t.dbLogin,this.dbName=t.dbName,this.dbHost=t.dbHost,this.dbPassword=N},save:function(){var t=this,e=arguments.length>0&&void 0!==arguments[0]&&arguments[0];if(!this.saving){this.saving=!0;var s={DbLogin:this.dbLogin,DbName:this.dbName,DbHost:this.dbHost};N!==this.dbPassword&&(s.DbPassword=this.dbPassword),n["a"].sendRequest({moduleName:"Core",methodName:"UpdateSettings",parameters:s}).then((function(s){t.saving=!1,!0===s?(o["a"].saveDatabaseSetting({dbName:t.dbName,dbLogin:t.dbLogin,dbHost:t.dbHost}),t.savedPass=t.dbPassword,t.storeAuthTokenInDB&&(t.showDialog=!0),!0===e?t.createTables():t.$store.dispatch("tenants/requestTenants"),r["a"].showReport(t.$t("COREWEBCLIENT.REPORT_SETTINGS_UPDATE_SUCCESS"))):r["a"].showError(t.$t("COREWEBCLIENT.ERROR_SAVING_SETTINGS_FAILED"))}),(function(e){t.saving=!1,r["a"].showError(l["a"].getTextFromResponse(e,t.$t("COREWEBCLIENT.ERROR_SAVING_SETTINGS_FAILED")))}))}},testDbConnection:function(){var t=this;if(!this.testingConnection){this.testingConnection=!0;var e={DbLogin:this.dbLogin,DbName:this.dbName,DbHost:this.dbHost};N!==this.dbPassword&&(e.DbPassword=this.dbPassword),n["a"].sendRequest({moduleName:"Core",methodName:"TestDbConnection",parameters:e}).then((function(e){t.testingConnection=!1,!0===e?r["a"].showReport(t.$t("ADMINPANELWEBCLIENT.REPORT_DB_CONNECT_SUCCESSFUL")):r["a"].showError(t.$t("ADMINPANELWEBCLIENT.ERROR_DB_CONNECT_FAILED"))}),(function(e){t.testingConnection=!1,r["a"].showError(l["a"].getTextFromResponse(e,t.$t("ADMINPANELWEBCLIENT.ERROR_DB_CONNECT_FAILED")))}))}},askCreateTables:function(){var t,e,s=this;this.hasChanges()&&d.a.isFunction(null===this||void 0===this||null===(t=this.$refs)||void 0===t||null===(e=t.confirmDialog)||void 0===e?void 0:e.openDialog)?this.$refs.confirmDialog.openDialog({title:"",message:this.$t("ADMINPANELWEBCLIENT.CONFIRM_SAVE_CHANGES_BEFORE_CREATE_TABLES"),okHandler:function(){s.save(!0)}}):this.createTables()},createTables:function(){var t=this;if(!this.creatingTables){var e={};this.creatingTables=!0,n["a"].sendRequest({moduleName:"Core",methodName:"CreateTables",parameters:e}).then((function(e){t.creatingTables=!1,!0===e?(t.$store.dispatch("tenants/requestTenants"),r["a"].showReport(t.$t("ADMINPANELWEBCLIENT.REPORT_CREATE_TABLES_SUCCESSFUL"))):r["a"].showError(t.$t("ADMINPANELWEBCLIENT.ERROR_CREATE_TABLES_FAILED"))}),(function(e){t.creatingTables=!1,r["a"].showError(l["a"].getTextFromResponse(e,t.$t("ADMINPANELWEBCLIENT.ERROR_CREATE_TABLES_FAILED")))}))}},updateConfig:function(){var t=this;this.updatingConfiguration||(this.updatingConfiguration=!0,n["a"].sendRequest({moduleName:"Core",methodName:"UpdateConfig"}).then((function(e){t.updatingConfiguration=!1,!0===e?r["a"].showReport(t.$t("ADMINPANELWEBCLIENT.REPORT_UPDATE_CONFIG_SUCCESSFUL")):r["a"].showError(t.$t("ADMINPANELWEBCLIENT.ERROR_UPDATE_CONFIG_FAILED"))}),(function(e){t.updatingConfiguration=!1,r["a"].showError(l["a"].getTextFromResponse(e,t.$t("ADMINPANELWEBCLIENT.ERROR_UPDATE_CONFIG_FAILED")))})))}}},u=C,m=s("2877"),p=s("4983"),b=s("f09f"),L=s("a370"),T=s("27f9"),A=s("9c40"),v=s("0170"),h=s("24e8"),I=s("4b7e"),g=s("74f7"),D=s("6b1d"),_=s("7f67"),f=s("eebe"),B=s.n(f),w=Object(m["a"])(u,a,i,!1,null,"4b7d3c86",null);e["default"]=w.exports;B()(w,"components",{QScrollArea:p["a"],QCard:b["a"],QCardSection:L["a"],QInput:T["a"],QBtn:A["a"],QItemLabel:v["a"],QDialog:h["a"],QCardActions:I["a"],QInnerLoading:g["a"],QLinearProgress:D["a"]}),B()(w,"directives",{ClosePopup:_["a"]})}}]);