/*!
FullCalendar Moment Timezone Plugin v6.1.8
Docs & License: https://fullcalendar.io/docs/moment-timezone-plugin
(c) 2023 Adam Shaw
*/
FullCalendar.MomentTimezone=function(e,t,n,a){"use strict";function l(e){return e&&e.__esModule?e:{default:e}}var r=l(n);class u extends a.NamedTimeZoneImpl{offsetForArray(e){return r.default.tz(e,this.timeZoneName).utcOffset()}timestampToArray(e){return r.default.tz(e,this.timeZoneName).toArray()}}n=t.createPlugin({name:"@fullcalendar/moment-timezone",namedTimeZonedImpl:u});return t.globalPlugins.push(n),e.default=n,Object.defineProperty(e,"__esModule",{value:!0}),e}({},FullCalendar,moment,FullCalendar.Internal);
//# sourceMappingURL=fullcalendar-moment-timezone.js.map