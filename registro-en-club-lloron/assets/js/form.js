String.prototype.has = function() {
	for (var i = 0; i < arguments.length; i++) {
		if (arguments[i] != '' && this.indexOf(arguments[i]) != -1) return true;
	}
	return false;
};

String.prototype.is = function() {
	for (var i = 0; i < arguments.length; i++) {
		if (this == arguments[i]) return true;
	}
	return false;
};

String.prototype.toTitleCase = function() {
	return this.replace(/([^\W_]+[^\s-]*) */g, function(txt) {
		return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
	});
};

/**Things to collect**/
var yourname, emailaddress, yourcolor, pitch, stepnumber = 1;
var pitch_cleared = false;
/**
	Text to type.
	Reserved characters:
	"^", "<", ">", "|"
**/
var si = 0;
var sts = [
	/*[0]*/
	'Así que quieres formar parte del club, muy bien.. empezemos!^',
	/*[1]*/
	'Qué tal si nos dejas tu nombre?>',
	/*[2]*/
	'',
	/*[3]*/
	'',
	/*[4]*/
	'',
	/*[5]*/
	'Descríbete brevemente._^',
	/*[6]*/
	'Usa el espacio de abajo para eso>. Se direct@. lúdico, Exprésate.',
	/*[7]*/
	'',
	/*[8]*/
	'...y no olvides... volver... :-|_^',
	/*[9]*/
	''
];

/* Where to type them */
var ii = 0;
var ids = ['pin_0', 'pin_1', 'pin_2', 'pin_3', 'pin_4', 'pin_5', 'pin_6', 'pin_7', 'pin_8', 'pin_9'];

/* Functions to call from "https://cdn.skypack.dev/script@0.1.4" */
_set_cursor = function(s) {
	document.body.className = s;
	console.log(document.body.className)
};

_show_name = function() {
	your_name.className = 'wake pulse';
	your_name.focus();
};

_show_email = function() {
	var ename = yourname.replace(/\s/g, '');
	email_address.value = ename + '@';
	email_address.className = 'wake pulse';
	email_address.focus();
};

_show_color = function() {
	your_color.className = 'wake pulse';
	your_color.focus();
};

_show_pitch = function() {
	type.className = 'wake pulse';
	type.addEventListener('focus', _show_submit, false);
};

_show_submit = function() {
	if (!pitch_cleared) {
		pitch_cleared = true;
		type.innerHTML = '';
		type.focus();
	}
	type.className = 'wake';
	go.className = 'wake';
};

var fi = 3;
var funcs = [
	/*[0] - toggle cursor state*/
	_set_cursor,
	/*[1]*/
	function() {
		console.log('f1')
	},
	/*[2]*/
	function() {
		console.log('f2')
	},
	/* Functions to run consecutively: fi 3+ */
	/*[3]*/
	_show_name,
	/*[4]*/
	_show_email,
	/*[5]*/
	_show_color,
	/*[6]*/
	_show_pitch,
	/*[7]*/
	_show_submit,
	/*[8]*/
	function() {
		console.log('f8')
	},
	/*[9]*/
	function() {
		console.log('f9')
	}
];

/* A little engine that typed */
var textHolder, textTarget, letter, li, typeSpeed =5,
	shortPause = 250,
	longPause = 500,
	tenseSilence = 2000,
	waiting = false;

_type = function() {
	if (waiting == false) {
		li = 0;
		waiting = true;
		textTarget = document.getElementById('pin_' + ii);
		textTarget.removeEventListener('click', _type, false);
		textTarget.innerHTML = '';
		textTarget.className = '';
		textHolder = sts[si].split('');
		_get();
		funcs[0]('wait');
	}
};

_get = function() {
	if (li < textHolder.length) {
		setTimeout(
			function() {
				letter = document.createTextNode(textHolder[li]);
				_print(textTarget, letter);
			}, typeSpeed);

	} else {
		waiting = false;
		funcs[0]('');
	}
};

_print = function(textTarget, letter) {
	li++;
	if (letter.nodeValue == ',' || letter.nodeValue == ';' || letter.nodeValue == ':') {
		setTimeout(_get, shortPause);
	} else if (letter.nodeValue == '.' || letter.nodeValue == '!' || letter.nodeValue == '?') {
		setTimeout(_get, longPause);
	} else if (letter.nodeValue == '_') {
		letter.nodeValue = ' ';
		setTimeout(_get, tenseSilence);
	} else if (letter.nodeValue == '^') {
		/* interrupt typing, advance to the next string and the next spot and continue*/
		letter.nodeValue = '';
		waiting = false;
		funcs[0]('');
		document.getElementById('pin_' + ii).className = 'rest';
		si++;
		ii++;
		if ((sts[si] != 'undefined') && (ids[ii] != 'undefined')) _type();
	} else if (letter.nodeValue == '>') {
		/* run next function */
		fi = Math.min(fi, (funcs.length - 1));
		funcs[fi]();
		console.log('function' + fi + 'called');
		letter.nodeValue = '';
		fi++;
		_get();
	} else if (letter.nodeValue == '<') {
		/* run previous function - do I need this? */
		fi = Math.max(fi, 3);
		funcs[fi]();
		console.log('function' + fi + 'called');
		letter.nodeValue = '';
		fi--;
		_get();
	} else {
		_get();
	}
	textTarget.appendChild(letter);
};

_your_name_react = function() {
	if (your_name.value != '' && si == 1) {
		document.getElementById('pin_' + ii).className = 'rest';
		yourname = your_name.value.toTitleCase();
		sts[2] = 'Muy Bien, ' + yourname + '. uhmm que mas necesito?... ya sé, tu email?>'
		si = 2;
		ii = 2;
		your_name.removeEventListener('blur', _your_name_react, false);
		your_name.className = 'sleep';
		your_name.parentNode.className = 'collapsed';
		_update_step();
		_type();
	}
};

_email_address_react = function() {
	if (email_address.value != '' && si == 2) {
		document.getElementById('pin_' + ii).className = 'rest';
		emailaddress = email_address.value;
		sts[3] = 'Traqui, ' + yourname + '. tu email ' + emailaddress + ' no será público. Qué pseudonimo usarás?>'
		si = 3;
		ii = 3;
		email_address.removeEventListener('blur', _your_name_react, false);
		email_address.className = 'sleep';
		email_address.parentNode.className = 'collapsed';
		_update_step();
		_type();
	}
};

_your_color_react = function() {
	if (your_color.value != '' && si == 3) {
		document.getElementById('pin_' + ii).className = 'rest';
		yourcolor = your_color.value.replace(/\s/g, '');
		yourcolor = yourcolor.toTitleCase();
		sts[4] = 'Buen pseudónimo ' + yourcolor + ' sólo si comentas en las historias se usará... ok?_^'
		si = 4;
		ii = 4;
		document.getElementById('pin_' + ii).style.color = yourcolor;
		your_color.removeEventListener('blur', _your_name_react, false);
		your_color.className = 'sleep';
		your_color.parentNode.className = 'collapsed';
		_type();
	}
};

_check_form = function(e) {
	var key = e.charCode || e.keyCode || 0;
	if (key == 13) {
		if (si < 9) e.preventDefault();
		_your_name_react();
		_email_address_react();
		_your_color_react();
	}
};

_send_pitch = function() {
	if (type.innerHTML.length == 0) {
		sts[6] = 'En Serio, ' + yourname + '?  nada más?';
		_type();
	} else if (type.innerHTML.length < 50 && type.innerHTML.length > 0) {
		sts[6] = 'No puede ser, ' + yourname + '. tu descripción es más corta que un tweet. Mínimo 100 caracteres';
		_type();
	} else if (type.innerHTML.length < 100 && type.innerHTML.length >= 50) {
		sts[6] = 'Más power, ' + yourname + '. Aún estás a ' + (100 - type.innerHTML.length) + ' caracteres de lograrlo.';
		_type();
	} else if (type.innerHTML.length >= 100) {
		type.contentEditable = false;  // Deshabilitar la edición del campo
		type.removeEventListener('input', _send_pitch);  // Deshabilitar el evento de entrada
		document.getElementById('pin_' + ii).className = 'rest';
		go.className = 'rest';
		setTimeout(function() {
			type.className = 'rest';
			step.className = 'sleep';
		}, 10000);
		sts[7] = 'Bien hecho, ' + yourname + '. Todo ok. Nos vemos pronto.^';
		si = 7;
		ii = 7;
		_update_step();
		_type();
	}
};



_stretch_field = function() {
	this.style.width = Math.max(3, this.value.length * .75) + 'em';
};

_update_step = function() {
	step.className = 'sleep';
	setTimeout(function() {
		step.innerText = stepnumber;
		stepnumber++;
		setTimeout(function() {
			step.className = 'wake';
		}, 2000);
	}, 2000);
};

pin_0.addEventListener('click', _type, false);
pin_0.addEventListener('click', _update_step, false);
hire_us.addEventListener('keypress', _check_form, false);
your_name.addEventListener('keyup', _stretch_field, false);
your_name.addEventListener('blur', _your_name_react, false);
email_address.addEventListener('focus', _stretch_field, false);
email_address.addEventListener('keyup', _stretch_field, false);
email_address.addEventListener('blur', _email_address_react, false);
your_color.addEventListener('keyup', _stretch_field, false);
your_color.addEventListener('blur', _your_color_react, false);
go.addEventListener('click', _send_pitch, false);
/* end */