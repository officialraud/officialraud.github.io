import"./hoisted.DOvGuzLA.js";const g={src:"/_astro/default-cover.CqdqVVXu.webp",width:64,height:64,format:"webp"},E="a45dc2a2c7f75ca07f3989640252c16f",L="neverlane";function q(){const e=document.querySelector("#lastfm-status");if(!e)return;const t=e.querySelector("[data-status]"),n=e.querySelector("[data-info]");if(!t||!n)return;const m=setInterval(()=>{if(t.dataset.status!=="loading")return clearInterval(m);t.textContent?.endsWith("...")?t.textContent=t.textContent.slice(0,-3):t.textContent+="."},300),r=(c,s="info")=>{t.textContent=c,t.dataset.status=s},o=async()=>{const s=await(await fetch(`https://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=${L}&api_key=${E}&format=json&limit=1`)).json();if("error"in s)switch(t.classList.remove("hidden"),n.classList.add("!hidden"),s.error){case 10:return r("Ð½ÐµÐ²ÐµÑ€Ð½Ñ‹Ð¹ ÐºÐ»ÑŽÑ‡ API","error:invalid-api-key");case 6:return r("Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»ÑŒ Ð½Ðµ Ð½Ð°Ð¸Ì†Ð´ÐµÐ½","error:user-not-found");default:return r(`Ð¾ÑˆÐ¸Ð±ÐºÐ° API: ${s.message}`,"error:api")}const i=s.recenttracks.track.find(a=>a?.["@attr"]?.nowplaying==="true");if(!i){r("Ð² Ð´Ð°Ð½Ð½Ñ‹Ð¹ Ð¼Ð¾Ð¼ÐµÐ½Ñ‚ Ñ Ð½Ð¸Ñ‡ÐµÐ³Ð¾ Ð½Ðµ ÑÐ»ÑƒÑˆÐ°ÑŽ","not-playing"),t.classList.remove("hidden"),n.classList.add("!hidden");return}r("Ñ‚Ð¾Ð¿Ñ‡Ð¸Ðº","success");const d=e.querySelector("[data-cover]"),l=e.querySelector("[data-title]"),u=e.querySelector("[data-artist]"),f=e.querySelector("[data-url]");if(!d||!l||!u||!f)return;const{name:h,artist:v,image:p,url:y}=i,S=p.find(a=>a.size==="medium")?.["#text"];d.src=S||g.src,l.textContent=h,u.textContent=v["#text"],f.href=y,t.classList.add("hidden"),n.classList.remove("!hidden")};o(),setInterval(o,5e3)}document.addEventListener("astro:page-load",q);
