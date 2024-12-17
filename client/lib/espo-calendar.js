/*! espocrm 2024-10-10 */
define("modules/crm/views/calendar/calendar",["exports","view","moment","fullcalendar"],function(t,e,m,s){"use strict";function n(t){if("function"!=typeof WeakMap)return null;var e=new WeakMap,a=new WeakMap;return(n=function(t){return t?a:e})(t)}function a(t){return t&&t.__esModule?t:{default:t}}Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0,e=a(e),m=a(m),s=function(t,e){if(!e&&t&&t.__esModule)return t;if(null===t||"object"!=typeof t&&"function"!=typeof t)return{default:t};e=n(e);if(e&&e.has(t))return e.get(t);var a,i={},s=Object.defineProperty&&Object.getOwnPropertyDescriptor;for(a in t){var o;"default"!==a&&Object.prototype.hasOwnProperty.call(t,a)&&((o=s?Object.getOwnPropertyDescriptor(t,a):null)&&(o.get||o.set)?Object.defineProperty(i,a,o):i[a]=t[a])}i.default=t,e&&e.set(t,i);return i}(s);class i extends e.default{template="crm:calendar/calendar";eventAttributes=[];colors={};allDayScopeList=["Task"];scopeList=["Meeting","Call","Task"];header=!0;modeList=[];fullCalendarModeList=["month","agendaWeek","agendaDay","basicWeek","basicDay","listWeek"];defaultMode="agendaWeek";slotDuration=30;scrollToNowSlots=6;scrollHour=6;titleFormat={month:"MMMM YYYY",week:"MMMM YYYY",day:"dddd, MMMM D, YYYY"};rangeSeparator=" – ";fetching=!1;modeViewMap={month:"dayGridMonth",agendaWeek:"timeGridWeek",agendaDay:"timeGridDay",basicWeek:"dayGridWeek",basicDay:"dayGridDay",listWeek:"listWeek"};extendedProps=["scope","recordId","dateStart","dateEnd","dateStartDate","dateEndDate","status","originalColor","duration","allDayCopy"];calendar;events={'click button[data-action="prev"]':function(){this.actionPrevious()},'click button[data-action="next"]':function(){this.actionNext()},'click button[data-action="today"]':function(){this.actionToday()},'click [data-action="mode"]':function(t){t=$(t.currentTarget).data("mode");this.selectMode(t)},'click [data-action="refresh"]':function(){this.actionRefresh()},'click [data-action="toggleScopeFilter"]':function(t){const e=$(t.currentTarget);var a=e.data("name");const i=e.find(".filter-check-icon");i.hasClass("hidden")?i.removeClass("hidden"):i.addClass("hidden"),t.stopPropagation(t),this.toggleScopeFilter(a)}};data(){return{mode:this.mode,header:this.header,isCustomViewAvailable:this.isCustomViewAvailable,isCustomView:this.isCustomView,todayLabel:this.translate("Today","labels","Calendar"),todayLabelShort:this.translate("Today","labels","Calendar").slice(0,2)}}setup(){this.wait(Espo.loader.requirePromise("lib!@fullcalendar/moment")),this.wait(Espo.loader.requirePromise("lib!@fullcalendar/moment-timezone")),this.suppressLoadingAlert=this.options.suppressLoadingAlert,this.date=this.options.date||null,this.mode=this.options.mode||this.defaultMode,this.header=("header"in this.options?this.options:this).header,this.scrollToNowSlots=(void 0!==this.options.scrollToNowSlots?this.options:this).scrollToNowSlots,this.setupMode(),this.$container=this.options.$container,this.colors=Espo.Utils.clone(this.getMetadata().get("clientDefs.Calendar.colors")||this.colors),this.modeList=this.getMetadata().get("clientDefs.Calendar.modeList")||this.modeList,this.scopeList=this.getConfig().get("calendarEntityList")||Espo.Utils.clone(this.scopeList),this.allDayScopeList=this.getMetadata().get("clientDefs.Calendar.allDayScopeList")||this.allDayScopeList,this.slotDuration=this.options.slotDuration||this.getPreferences().get("calendarSlotDuration")||this.getMetadata().get("clientDefs.Calendar.slotDuration")||this.slotDuration,this.setupScrollHour(),this.colors={...this.colors,...this.getHelper().themeManager.getParam("calendarColors")},this.isCustomViewAvailable="no"!==this.getAcl().getPermissionLevel("userPermission"),this.options.userId&&(this.isCustomViewAvailable=!1);const e=[];this.scopeList.forEach(t=>{this.getAcl().check(t)&&e.push(t)}),this.scopeList=e,this.header?this.enabledScopeList=this.getStoredEnabledScopeList()||Espo.Utils.clone(this.scopeList):this.enabledScopeList=this.options.enabledScopeList||Espo.Utils.clone(this.scopeList),"[object Array]"!==Object.prototype.toString.call(this.enabledScopeList)&&(this.enabledScopeList=[]),this.enabledScopeList.forEach(t=>{var e=this.getMetadata().get(["clientDefs",t,"color"]);e&&(this.colors[t]=e)}),this.header&&this.createView("modeButtons","crm:views/calendar/mode-buttons",{selector:".mode-buttons",isCustomViewAvailable:this.isCustomViewAvailable,modeList:this.modeList,scopeList:this.scopeList,mode:this.mode})}setupScrollHour(){var t;void 0===this.options.scrollHour?null===(t=this.getPreferences().get("calendarScrollHour"))?this.slotDuration<30&&(this.scrollHour=8):this.scrollHour=t:this.scrollHour=this.options.scrollHour}setupMode(){if(this.viewMode=this.mode,this.isCustomView=!1,this.teamIdList=this.options.teamIdList||null,this.teamIdList&&!this.teamIdList.length&&(this.teamIdList=null),~this.mode.indexOf("view-")){this.viewId=this.mode.slice(5),this.isCustomView=!0;const t=this.getPreferences().get("calendarViewDataList")||[];t.forEach(t=>{t.id===this.viewId&&(this.viewMode=t.mode,this.teamIdList=t.teamIdList,this.viewName=t.name)})}}isAgendaMode(){return 0===this.mode.indexOf("agenda")}selectMode(t){if(this.fullCalendarModeList.includes(t)||0===t.indexOf("view-")){const i=this.mode;if(0===t.indexOf("view-")||0!==t.indexOf("view-")&&0===i.indexOf("view-"))return void this.trigger("change:mode",t,!0);this.mode=t,this.setupMode(),this.isCustomView?this.$el.find('button[data-action="editCustomView"]').removeClass("hidden"):this.$el.find('button[data-action="editCustomView"]').addClass("hidden"),this.$el.find('[data-action="mode"]').removeClass("active"),this.$el.find('[data-mode="'+t+'"]').addClass("active"),this.calendar.changeView(this.modeViewMap[this.viewMode]);var e=0!==i.indexOf("agenda")&&0===t.indexOf("agenda"),a=0===i.indexOf("agenda")&&0!==t.indexOf("agenda");(e&&!this.fetching||a&&!this.fetching)&&this.calendar.refetchEvents(),this.updateDate(),this.hasView("modeButtons")&&(this.getModeButtonsView().mode=t,this.getModeButtonsView().reRender())}this.trigger("change:mode",t)}getModeButtonsView(){return this.getView("modeButtons")}toggleScopeFilter(t){var e=this.enabledScopeList.indexOf(t);~e?this.enabledScopeList.splice(e,1):this.enabledScopeList.push(t),this.storeEnabledScopeList(this.enabledScopeList),this.calendar.refetchEvents()}getStoredEnabledScopeList(){return this.getStorage().get("state","calendarEnabledScopeList")||null}storeEnabledScopeList(t){this.getStorage().set("state","calendarEnabledScopeList",t)}updateDate(){var t;this.header&&(this.isToday()?this.$el.find('button[data-action="today"]').addClass("active"):this.$el.find('button[data-action="today"]').removeClass("active"),t=this.getTitle(),this.$el.find(".date-title h4 span").text(t))}isToday(){var t=this.calendar.view,e=(0,m.default)().unix(),a=(0,m.default)(t.activeStart).unix(),t=(0,m.default)(t.activeEnd).unix();return a<=e&&e<t}getTitle(){var t=this.calendar.view,e={timeGridWeek:"week",timeGridDay:"day",dayGridWeek:"week",dayGridDay:"day",dayGridMonth:"month"}[t.type]||t.type;let a;var i,s=this.titleFormat[e];return a="week"===e?(e=this.dateToMoment(t.currentStart).format(s))!==(i=this.dateToMoment(t.currentEnd).subtract(1,"minute").format(s))?e+this.rangeSeparator+i:e:(0,m.default)(t.currentStart).format(s),this.options.userId&&this.options.userName&&(a+=" ("+this.options.userName+")"),a=this.getHelper().escapeString(a)}convertToFcEvent(e){const a={title:e.name||"",scope:e.scope,id:e.scope+"-"+e.id,recordId:e.id,dateStart:e.dateStart,dateEnd:e.dateEnd,dateStartDate:e.dateStartDate,dateEndDate:e.dateEndDate,status:e.status,originalColor:e.color,display:"block"};e.isWorkingRange&&(a.display="inverse-background",a.groupId="nonWorking",a.color=this.colors.bg),this.teamIdList&&(a.userIdList=e.userIdList||[],a.userNameMap=e.userNameMap||{},a.userIdList=a.userIdList.sort((t,e)=>(a.userNameMap[t]||"").localeCompare(a.userNameMap[e]||""))),this.eventAttributes.forEach(t=>{a[t]=e[t]});let t,i;return e.dateStart&&(t=e.dateStartDate?this.dateToMoment(e.dateStartDate):this.getDateTime().toMoment(e.dateStart)),(i=e.dateEnd?e.dateEndDate?this.dateToMoment(e.dateEndDate):this.getDateTime().toMoment(e.dateEnd):i)&&t&&(a.duration=i.unix()-t.unix()),t&&(a.start=t.toISOString(!0)),i&&(a.end=i.toISOString(!0)),a.allDay=!1,e.isWorkingRange||(this.handleAllDay(a),this.fillColor(a),this.handleStatus(a)),e.isWorkingRange&&!this.isAgendaMode()&&(a.allDay=!0),a}dateToMoment(t){return m.default.tz(t,this.getDateTime().getTimeZone())}getEventTypeCompletedStatusList(t){return this.getMetadata().get(["scopes",t,"completedStatusList"])||[]}getEventTypeCanceledStatusList(t){return this.getMetadata().get(["scopes",t,"canceledStatusList"])||[]}fillColor(t){let e=this.colors[t.scope];(e=(e=t.originalColor?t.originalColor:e)||this.getColorFromScopeName(t.scope))&&(this.getEventTypeCompletedStatusList(t.scope).includes(t.status)||this.getEventTypeCanceledStatusList(t.scope).includes(t.status))&&(e=this.shadeColor(e,.4)),t.color=e}handleStatus(t){this.getEventTypeCanceledStatusList(t.scope).includes(t.status)?t.className=["event-canceled"]:t.className=[]}shadeColor(t,e){if("transparent"===t)return t;this.getThemeManager().getParam("isDark")&&(e*=-1);var a=t.substring(7),t=parseInt(t.slice(1,7),16),i=e<0?0:255,e=e<0?-1*e:e,s=t>>16,o=t>>8&255,t=255&t;return"#"+(16777216+65536*(Math.round((i-s)*e)+s)+256*(Math.round((i-o)*e)+o)+(Math.round((i-t)*e)+t)).toString(16).slice(1)+a}handleAllDay(t,e){let a=t.start?this.dateToMoment(t.start):null;const i=t.end?this.dateToMoment(t.end):null;return this.allDayScopeList.includes(t.scope)?(t.allDay=t.allDayCopy=!0,!e&&i&&(a=i.clone(),t.dateEndDate||0!==i.hours()||0!==i.minutes()||a.add(-1,"days")),a.isSame(i)&&i.add(1,"days")):t.dateStartDate&&t.dateEndDate?(t.allDay=!0,t.allDayCopy=t.allDay,e||i.add(1,"days")):(a&&i?a.format("YYYY-DD")!==i.format("YYYY-DD")&&86400<=i.unix()-a.unix()?(t.allDay=!0,0===i.hours()&&0===i.minutes()||i.add(1,"days")):t.allDay=!1:(t.allDay=!0,i&&(a=i)),t.allDayCopy=t.allDay),a&&(t.start=a.toDate()),void(i&&(t.end=i.toDate()))}convertToFcEvents(t){this.now=m.default.tz(this.getDateTime().getTimeZone());const e=[];return t.forEach(t=>{t=this.convertToFcEvent(t);e.push(t)}),e}convertDateTime(t){var e=this.getDateTime().internalDateTimeFormat,a=this.getDateTime().timeZone;const i=a?m.default.tz(t,null,a).utc():m.default.utc(t,null);return i.format(e)+":00"}getCalculatedHeight(){return this.$container&&this.$container.length?this.$container.height():this.getHelper().calculateContentContainerHeight(this.$el.find(".calendar"))}adjustSize(){var t;this.isRemoved()||(t=this.getCalculatedHeight(),this.calendar.setOption("contentHeight",t),this.calendar.updateSize())}afterRender(){this.options.containerSelector&&(this.$container=$(this.options.containerSelector)),this.$calendar=this.$el.find("div.calendar");var t="00:"+this.slotDuration+":00";const e=this.getDateTime().timeFormat;let a=e;~e.indexOf("a")?a="h:mma":~e.indexOf("A")&&(a="h:mmA");const i={scrollTime:this.scrollHour+":00",headerToolbar:!1,slotLabelFormat:a,eventTimeFormat:e,initialView:this.modeViewMap[this.viewMode],defaultRangeSeparator:this.rangeSeparator,weekNumbers:!0,weekNumberCalculation:"ISO",editable:!0,selectable:!0,selectMirror:!0,height:this.options.height||void 0,firstDay:this.getDateTime().weekStart,slotEventOverlap:!0,slotDuration:t,slotLabelInterval:"01:00",snapDuration:60*this.slotDuration*1e3,timeZone:this.getDateTime().timeZone||void 0,longPressDelay:300,eventColor:this.colors[""],nowIndicator:!0,allDayText:"",weekText:"",views:{week:{dayHeaderFormat:"ddd DD"},day:{dayHeaderFormat:"ddd DD"},month:{dayHeaderFormat:"ddd"}},windowResize:()=>{this.adjustSize()},select:t=>{var e=t.startStr,a=t.endStr,t=t.allDay;let i=null,s=null;var o=this.convertDateTime(e),n=this.convertDateTime(a);t&&(s=(0,m.default)(e).format("YYYY-MM-DD"),i=(0,m.default)(a).clone().add(-1,"days").format("YYYY-MM-DD")),this.createEvent({dateStart:o,dateEnd:n,allDay:t,dateStartDate:s,dateEndDate:i}),this.calendar.unselect()},eventClick:t=>{var t=t.event,e=t.extendedProps.scope,t=t.extendedProps.recordId,a=this.getMetadata().get(["clientDefs",e,"modalViews","detail"])||"views/modals/detail";Espo.Ui.notify(" ... "),this.createView("quickView",a,{scope:e,id:t,removeDisabled:!1},a=>{a.render(),a.notify(!1),this.listenToOnce(a,"after:destroy",t=>{this.removeModel(t)}),this.listenTo(a,"after:save",(t,e)=>{(e=e||{}).bypassClose||a.close(),this.updateModel(t)})})},datesSet:()=>{var t=this.getDateTime().fromIso(this.calendar.getDate().toISOString());const e=this.dateToMoment(this.calendar.getDate());this.date=t,this.trigger("view",e.format("YYYY-MM-DD"),this.mode)},events:(t,e)=>{var a=this.getDateTime().internalDateTimeFormat;const i=m.default.tz(t.startStr,t.timeZone),s=m.default.tz(t.endStr,t.timeZone);t=i.utc().format(a),a=s.utc().format(a);this.fetchEvents(t,a,e)},eventDrop:e=>{const a=e.event;var t=e.delta,i=a.extendedProps.scope;if(a.allDay||!a.extendedProps.allDayCopy)if(!a.allDay||a.extendedProps.allDayCopy){const c=a.start;var h=a.end,s=a.extendedProps.dateStart,o=a.extendedProps.dateEnd,n=a.extendedProps.dateStartDate,d=a.extendedProps.dateEndDate;const r={};if(s&&(s=this.getDateTime().toMoment(s).add(t).format(this.getDateTime().internalDateTimeFormat),r.dateStart=this.convertDateTime(s)),o&&(s=this.getDateTime().toMoment(o).add(t).format(this.getDateTime().internalDateTimeFormat),r.dateEnd=this.convertDateTime(s)),n){const u=this.dateToMoment(n).add(t);r.dateStartDate=u.format(this.getDateTime().internalDateFormat)}if(d){const p=this.dateToMoment(d).add(t);r.dateEndDate=p.format(this.getDateTime().internalDateFormat)}const l=this.obtainPropsFromEvent(a);h||this.allDayScopeList.includes(i)||(l.end=m.default.tz(c.toISOString(),null,this.getDateTime().timeZone).clone().add(a.extendedProps.duration,"s").toDate()),l.allDay=!1,l.dateStart=r.dateStart,l.dateEnd=r.dateEnd,l.dateStartDate=r.dateStartDate,l.dateEndDate=r.dateEndDate,this.handleAllDay(l,!0),this.fillColor(l),Espo.Ui.notify(this.translate("saving","messages")),this.getModelFactory().create(i,t=>{t.id=l.recordId,t.save(r,{patch:!0}).then(()=>{Espo.Ui.notify(!1),this.applyPropsToEvent(a,l)}).catch(()=>{e.revert()})})}else e.revert();else e.revert()},eventResize:e=>{const a=e.event,i={dateEnd:this.convertDateTime(a.endStr)},s=(0,m.default)(a.end).unix()-(0,m.default)(a.start).unix();Espo.Ui.notify(this.translate("saving","messages")),this.getModelFactory().create(a.extendedProps.scope,t=>{t.id=a.extendedProps.recordId,t.save(i,{patch:!0}).then(()=>{Espo.Ui.notify(!1),a.setExtendedProp("dateEnd",i.dateEnd),a.setExtendedProp("duration",s)}).catch(()=>{e.revert()})})},eventAllow:(t,e)=>!(e.allDay&&!t.allDay)&&!(!e.allDay&&t.allDay)};this.teamIdList&&(i.eventContent=t=>{const i=t.event,s=$("<div>"),e=(s.append($("<div>").append($("<div>").addClass("fc-event-main-frame").append(t.timeText?$("<div>").addClass("fc-event-time").text(t.timeText):void 0).append($("<div>").addClass("fc-event-title").text(i.title)))),i.extendedProps.userIdList||[]);return e.forEach(t=>{var e=i.extendedProps.userNameMap[t]||"";let a=this.getHelper().getAvatarHtml(t,"small",13);a&&(a+=" ");t=$("<div>").addClass("user").css({overflow:"hidden"}).append(a).append($("<span>").text(e));s.append(t)}),{html:s.get(0).innerHTML}}),this.options.height?i.aspectRatio=1.62:i.contentHeight=this.getCalculatedHeight(),this.date?i.initialDate=this.date:this.$el.find('button[data-action="today"]').addClass("active"),setTimeout(()=>{this.calendar=new s.Calendar(this.$calendar.get(0),i),this.calendar.render(),this.handleScrollToNow(),this.updateDate(),this.$container&&this.$container.length&&this.adjustSize()},150)}handleScrollToNow(){var t;"agendaWeek"!==this.mode&&"agendaDay"!==this.mode||this.isToday()&&((t=this.getDateTime().getNowMoment().hours()-Math.floor(this.slotDuration*this.scrollToNowSlots/60))<0||this.calendar.scrollToTime(t+":00"))}createEvent(t){(t=t||{}).dateStart||this.date===this.getDateTime().getToday()||"day"!==this.mode&&"agendaDay"!==this.mode||(t.allDay=!0,t.dateStartDate=this.date,t.dateEndDate=this.date);const e={};this.options.userId&&(e.assignedUserId=this.options.userId,e.assignedUserName=this.options.userName||this.options.userId),Espo.Ui.notify(" ... "),this.createView("quickEdit","crm:views/calendar/modals/edit",{attributes:e,enabledScopeList:this.enabledScopeList,scopeList:this.scopeList,allDay:t.allDay,dateStartDate:t.dateStartDate,dateEndDate:t.dateEndDate,dateStart:t.dateStart,dateEnd:t.dateEnd},t=>{t.render(),Espo.Ui.notify(!1);let e=!1;this.listenTo(t,"after:save",t=>{if(!e)return this.addModel(t),void(e=!0);this.updateModel(t)})})}fetchEvents(t,e,a){let i=`Activities?from=${t}&to=`+e;this.options.userId&&(i+="&userId="+this.options.userId),i+="&scopeList="+encodeURIComponent(this.enabledScopeList.join(",")),this.teamIdList&&this.teamIdList.length&&(i+="&teamIdList="+encodeURIComponent(this.teamIdList.join(",")));t="agendaWeek"===this.mode||"agendaDay"===this.mode;i+="&agenda="+encodeURIComponent(t),this.suppressLoadingAlert||Espo.Ui.notify(" ... "),Espo.Ajax.getRequest(i).then(t=>{t=this.convertToFcEvents(t);a(t),Espo.Ui.notify(!1)}),this.fetching=!0,this.suppressLoadingAlert=!1,setTimeout(()=>this.fetching=!1,50)}addModel(t){const e=t.getClonedAttributes();e.scope=t.entityType;t=this.convertToFcEvent(e);this.calendar.addEvent(t,!0)}updateModel(t){var e=t.entityType+"-"+t.id,e=this.calendar.getEventById(e);if(e){const a=t.getClonedAttributes();a.scope=t.entityType;t=this.convertToFcEvent(a);this.applyPropsToEvent(e,t)}}obtainPropsFromEvent(t){const e={};for(const a in t.extendedProps)e[a]=t.extendedProps[a];return e.allDay=t.allDay,e.start=t.start,e.end=t.end,e.title=t.title,e.id=t.id,e.color=t.color,e}applyPropsToEvent(t,e){"start"in e&&(!e.allDay&&e.end&&e.end.getTime()===e.start.getTime()&&(e.end=(0,m.default)(e.end).add(1,"hour").toDate()),t.setDates(e.start,e.end,{allDay:e.allDay}));for(const i in e){var a=e[i];"start"!==i&&"end"!==i&&"allDay"!==i&&("className"!==i?this.extendedProps.includes(i)?t.setExtendedProp(i,a):t.setProp(i,a):t.setProp("classNames",a))}}removeModel(t){const e=this.calendar.getEventById(t.entityType+"-"+t.id);e&&e.remove()}actionRefresh(t){t&&t.suppressLoadingAlert&&(this.suppressLoadingAlert=!0),this.calendar.refetchEvents()}actionPrevious(){this.calendar.prev(),this.handleScrollToNow(),this.updateDate()}actionNext(){this.calendar.next(),this.handleScrollToNow(),this.updateDate()}getColorFromScopeName(i){var t=this.getMetadata().get("clientDefs.Calendar.additionalColorList")||[];if(t.length){var s=this.getMetadata().get("clientDefs.Calendar.colors")||{},o=this.getConfig().get("calendarEntityList")||[];let e=0,a=0;for(let t=0;t<o.length;t++)if(!(o[t]in s)){if(o[t]===i){e=a;break}a++}return e%=t.length,this.colors[i]=t[e],this.colors[i]}}actionToday(){this.isToday()?this.actionRefresh():(this.calendar.today(),this.handleScrollToNow(),this.updateDate())}}t.default=i});
//# sourceMappingURL=espo-calendar.js.map