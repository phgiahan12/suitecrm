/* Copyright (c) 2006 Yahoo! Inc. All rights reserved. */YAHOO.widget.TVAnim=new function(){this.FADE_IN="YAHOO.widget.TVFadeIn";this.FADE_OUT="YAHOO.widget.TVFadeOut";this.getAnim=function(type,el,callback){switch(type){case this.FADE_IN:return new YAHOO.widget.TVFadeIn(el,callback);case this.FADE_OUT:return new YAHOO.widget.TVFadeOut(el,callback);default:return null;}};this.isValid=function(type){return("undefined"!=typeof[type]);};};