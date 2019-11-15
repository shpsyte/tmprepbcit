/*
Javascript jscPopupBox control
version 1.0
AdvanceByDesign.com

Copyright (C) 2010 Robert Rook
Released under the terms of the
ABD Free Source Code Licence
*/
JSCPB_DEFAULT_ONSCROLL = null;
JSCPB_IS_DRAWN = false;
JSCPB_CURRENT = null;

a_jscPopupBoxes = new Array();

function jscPopupBox() {
	this.screen_colour = "#000";	// Screen overlay colour
	this.screen_alpha = 50;			// Screen overlay transparency
	this.zindex = 99;				// Should be highest page z-index value

	this.html = "";					// Content

	this.width = 400;
	this.height = 400;

	this.index = a_jscPopupBoxes.length;
	a_jscPopupBoxes.push(this);

	return this;
}
jscPopupBox.prototype.Show = function() {
	if(!JSCPB_IS_DRAWN) { this.Draw(); }
	if(JSCPB_CURRENT!=null) { a_jscPopupBoxes[JSCPB_CURRENT].Hide(); }

	JSCPB_CURRENT = this.index;
	if(typeof window.onscroll=='function') {
		JSCPB_DEFAULT_ONSCROLL = window.onscroll;
	} else { JSCPB_DEFAULT_ONSCROLL = null; }
	window.onscroll = function() { a_jscPopupBoxes[JSCPB_CURRENT].Move(); }

	// Set positions, content, and visibility
	objBG = GetOBJ("id_jscpb_bg");
	objBox = GetOBJ("id_jscpb_box");

	if(window.innerWidth) {
		scr_x = document.body.scrollLeft; scr_y = document.body.scrollTop;
		scr_w = window.innerWidth; scr_h = window.innerHeight;
	} else {
		scr_x = document.body.scrollLeft; scr_y = document.body.scrollTop;
		scr_w = document.body.offsetWidth; scr_h = document.body.offsetHeight;
	}

	objBG.style.opacity = (this.screen_alpha/100);
	if(objBG.filters) {
		objBG.filters.alpha.opacity = this.screen_alpha;
	}
	objBG.style.backgroundColor = this.screen_colour;

	objBG.style.left = scr_x;
	objBG.style.top = scr_y;
	objBG.style.width = scr_w;
	objBG.style.height = scr_h;

	objBox.style.left = scr_x+(scr_w-this.width)/2;
	objBox.style.top = scr_y+(scr_h-this.height)/2;
	objBox.style.width = this.width;
	objBox.style.height = this.height;

	objBG.style.display = "block";
	objBox.style.display = "block";

	objBox.innerHTML = this.html;

	return true;
};
jscPopupBox.prototype.Hide = function() {
	if(!JSCPB_IS_DRAWN) { this.Draw(); }
	window.onscroll = JSCPB_DEFAULT_ONSCROLL;

	objBG = GetOBJ("id_jscpb_bg");
	objBox = GetOBJ("id_jscpb_box");

	objBG.style.display = "none";
	objBox.style.display = "none";
	objBox.innerHTML = "";

	JSCPB_CURRENT = null;

	return true;
};
jscPopupBox.prototype.Move = function() {
	if(!JSCPB_IS_DRAWN) { return false; }

	// Set positions
	objBG = GetOBJ("id_jscpb_bg");
	objBox = GetOBJ("id_jscpb_box");

	if(window.innerWidth) {
		scr_x = document.body.scrollLeft; scr_y = document.body.scrollTop;
		scr_w = window.innerWidth; scr_h = window.innerHeight;
	} else {
		scr_x = document.body.scrollLeft; scr_y = document.body.scrollTop;
		scr_w = document.body.offsetWidth; scr_h = document.body.offsetHeight;
	}

	objBG.style.left = scr_x;
	objBG.style.top = scr_y;
	objBG.style.width = scr_w;
	objBG.style.height = scr_h;

	objBox.style.left = scr_x+(scr_w-this.width)/2;
	objBox.style.top = scr_y+(scr_h-this.height)/2;

	return true;
};
jscPopupBox.prototype.Draw = function() {
	if(JSCPB_IS_DRAWN) { return false; }

	objHTML = '<div style="position:absolute;left:0px;top:0px;width:0px;'
	objHTML+= 'height:0px;padding:0;margin:0;border:none;';
	objHTML+= 'background-color:'+this.screen_colour+';z-index:'+this.zindex+';';
	objHTML+= 'display:none;filter:alpha(opacity=10);opacity:0.1;" id="id_jscpb_bg"></div>\n';

	objHTML+= '<div style="position:absolute;left:0px;top:0px;width:'+this.width+'px;';
	objHTML+= 'height:'+this.height+'px;padding:0;margin:0;border:none;';
	objHTML+= 'background-color:#FFF;z-index:'+(this.zindex+1)+';display:none;';
	objHTML+= 'overflow:auto;" id="id_jscpb_box"></div>\n';

	document.body.innerHTML+= objHTML;

	JSCPB_IS_DRAWN = true;
	return true;
};


if(typeof GetOBJ!='function') {
	function GetOBJ(objID) {
		if(document.getElementById) {
			return document.getElementById(objID);
		} else if(document.all) {
			return document.all[objID];
		}
		return null;
	}
}