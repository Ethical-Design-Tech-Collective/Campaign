<?php get_header(); 
while(have_posts()) {
    the_post(); ?>


<script>
  function animate(elem, style, unit, from, to, time, prop) {
    if (!elem) {
        return;
    }
    var start = new Date().getTime(),
        timer = setInterval(function () {
            var step = Math.min(1, (new Date().getTime() - start) / time);
            if (prop) {
                elem[style] = (from + step * (to - from))+unit;
            } else {
                elem.style[style] = (from + step * (to - from))+unit;
            }
            if (step === 1) {
                clearInterval(timer);
            }
        }, 10);
    if (prop) {
          elem[style] = from+unit;
    } else {
          elem.style[style] = from+unit;
    }
  }

  window.onload = function () {
    var target = document.getElementById("main-actions");
    document.getElementById("actions-link").onclick = function fun() {
      animate(document.scrollingElement || document.documentElement, "scrollTop", "", 0, target.offsetTop - 26, 200, true);
    }
  };
</script>

<script>
function showShare() {
    var sharePanel = document.getElementById("shareit-options");
    var shareButton = document.getElementById("shareit-button");
    sharePanel.style.display = "block";
    shareButton.style.display = "none";
}

function hideShare() {
    var sharePanel = document.getElementById("share-options");
    sharePanel.style.display = "none";
}
</script>

<div id="hero-block" class="section top-section main" style="background-image: url(<?php echo get_theme_file_uri('/images/bg2-de.jpg')?>);">
  <div class="container subscribe-container">
    <div class="left-part">
        <h1><?php echo get_field('front-page-title'); ?></h1>
        <p><?php echo get_field('front-page-p'); ?></p>
		<div class="share-it light">

			<div class="shareit-button" id="shareit-button" onclick="showShare()">
				<img class="share-image" src="<?php echo get_theme_file_uri('/images/share-white.svg')?>">   
				<span class="share-text"><?php pll_e('Teilen'); ?></span>
			</div>

			<div class="shareit-options" id="shareit-options" style="display: none;">

				<span><?php pll_e('Teilen'); ?>:</span>
				<a class="share-link" href="https://twitter.com/share?url=https://www.deineuropa.jetzt" target="blank">
					<i class="fab fa-twitter"></i>
				</a>
				<a class="share-link" href="https://www.facebook.com/sharer.php?u=https://www.deineuropa.jetzt" target="_blank">
					<i class="fab fa-facebook-f"></i>
				</a>
			</div>
		</div>
    </div>
    <div class="right-part">
      <!--<div class="input-group">
        <input class="standard-input light" type="text" name="name" placeholder="Your name">
        <input class="standard-input light" type="text" name="email" placeholder="Your email">
        <input class="standard-button button-outline-light" type="submit" value="Werde Teil der Bewegung!">
      </div>-->









<style>
 #_form_1_ { font-size:18px; }
 #_form_1_ * { outline:0; }
 ._form_hide { display:none; visibility:hidden; }
 ._form_show { display:block; visibility:visible; }
 #_form_1_._form-top { top:0; }
 #_form_1_._form-bottom { bottom:0; }
 #_form_1_._form-left { left:0; }
 #_form_1_._form-right { right:0; }
 #_form_1_ input[type="text"],#_form_1_ input[type="date"],#_form_1_ textarea { }
 #_form_1_ textarea { resize:none; }
 #_form_1_ ._submit {  }
 #_form_1_ ._close-icon { cursor:pointer; background-image:url('https://d226aj4ao1t61q.cloudfront.net/esfkyjh1u_forms-close-dark.png'); background-repeat:no-repeat; background-size:14.2px 14.2px; position:absolute; display:block; top:11px; right:9px; overflow:hidden; width:16.2px; height:16.2px; }
 #_form_1_ ._close-icon:before { position:relative; }
 #_form_1_ ._form-body { margin-bottom:30px; }
 #_form_1_ ._form-image-left { width:150px; float:left; }
 #_form_1_ ._form-content-right { margin-left:164px; }
 #_form_1_ ._form-branding { color:#fff; font-size:10px; clear:both; text-align:left; margin-top:30px; font-weight:100; }
 #_form_1_ ._form-branding ._logo { display:block; width:130px; height:14px; margin-top:6px; background-image:url('https://d226aj4ao1t61q.cloudfront.net/hh9ujqgv5_aclogo_li.png'); background-size:130px auto; background-repeat:no-repeat; }
 #_form_1_ ._form-label,#_form_1_ ._form_element ._form-label { font-weight:bold; margin-bottom:5px; display:block; }
 #_form_1_._dark ._form-branding { color:#333; }
 #_form_1_._dark ._form-branding ._logo { background-image:url('https://d226aj4ao1t61q.cloudfront.net/jftq2c8s_aclogo_dk.png'); }
 #_form_1_ ._form_element { position:relative; font-size:0; max-width:100%; }
 #_form_1_ ._form_element * {  }
 #_form_1_ ._form_element._clear { clear:both; width:100%; float:none; }
 #_form_1_ ._form_element._clear:after { clear:left; }
 #_form_1_ ._form_element input[type="text"],#_form_1_ ._form_element input[type="date"],#_form_1_ ._form_element select,#_form_1_ ._form_element textarea:not(.g-recaptcha-response) { display:block; width:100%; -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; }
 #_form_1_ ._field-wrapper { position:relative; }
 #_form_1_ ._inline-style { float:left; }
 #_form_1_ ._inline-style input[type="text"] { width:150px; }
 #_form_1_ ._inline-style:not(._clear) + ._inline-style:not(._clear) { margin-left:20px; }
 #_form_1_ ._form_element img._form-image { max-width:100%; }
 #_form_1_ ._clear-element { clear:left; }
 #_form_1_ ._full_width { width:100%; }
 #_form_1_ ._form_full_field { display:block; width:100%; margin-bottom:10px; }
 #_form_1_ input[type="text"]._has_error,#_form_1_ textarea._has_error { border:#862614 1px solid; }
 #_form_1_ input[type="checkbox"]._has_error { outline:#862614 1px solid; }
 #_form_1_ ._error { display:block; position:absolute; z-index:10000001; }
 #_form_1_ ._error._above { padding-bottom:4px; top:-41px; right:0; }
 #_form_1_ ._error._below { padding-top:4px; top:100%; right:0; }
 #_form_1_ ._error._above ._error-arrow { bottom:0; right:15px; border-left:5px solid transparent; border-right:5px solid transparent; border-top:5px solid #862614; }
 #_form_1_ ._error._below ._error-arrow { top:0; right:15px; border-left:5px solid transparent; border-right:5px solid transparent; border-bottom:5px solid #862614; }
 #_form_1_ ._error-inner { padding:8px 12px; background-color:#862614; font-size: 14px; font-weight: 500; color:#fff; text-align:center; text-decoration:none; -webkit-border-radius:4px; -moz-border-radius:4px; border-radius:4px; }
 #_form_1_ ._error-inner._form_error { margin-bottom:5px; text-align:left; }
 #_form_1_ ._button-wrapper ._error-inner._form_error { position:static; }
 #_form_1_ ._error-inner._no_arrow { margin-bottom:10px; }
 #_form_1_ ._error-arrow { position:absolute; width:0; height:0; }
 #_form_1_ ._error-html { margin-bottom:10px; }
 .pika-single { z-index:10000001 !important; }
 @media all and (min-width:320px) and (max-width:667px) { ::-webkit-scrollbar { display:none; }
 #_form_1_ { width:100%; min-width:100%; max-width:100%; box-sizing:border-box; }
 #_form_1_ * { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; }
 #_form_1_ ._form-content { margin:0; width:100%; }
 #_form_1_ ._form-inner { display:block; min-width:100%; }
 #_form_1_ ._form-title,#_form_1_ ._inline-style { margin-top:0; margin-right:0; margin-left:0; }
 #_form_1_ ._form-title {}
 #_form_1_ ._form_element { margin:0 0 20px; padding:0; width:100%; }
 #_form_1_ ._form-element,#_form_1_ ._inline-style,#_form_1_ input[type="text"],#_form_1_ label,#_form_1_ p,#_form_1_ textarea:not(.g-recaptcha-response) { float:none; display:block; width:100%; }
 #_form_1_ ._row._checkbox-radio label { display:inline; }
 #_form_1_ ._row,#_form_1_ p,#_form_1_ label { margin-bottom:0.7em; width:100%; }
 #_form_1_ ._row input[type="checkbox"],#_form_1_ ._row input[type="radio"] { margin:0 !important; vertical-align:middle !important; }
 #_form_1_ ._row input[type="checkbox"] + span label { display:inline; }
 #_form_1_ ._row span label { margin:0 !important; width:initial !important; vertical-align:middle !important; }
 #_form_1_ ._form-image { max-width:100%; height:auto !important; }
 #_form_1_ input[type="text"] {  }
 #_form_1_ input[type="radio"],#_form_1_ input[type="checkbox"] { display:inline-block; width:1.3em; height:1.3em; margin:0 0.3em 0 0; vertical-align:baseline; }
 #_form_1_ button[type="submit"] {  }
 #_form_1_ ._inline-style { margin:20px 0 0 !important; }
 }
 #_form_1_ { position:relative; text-align:left; }
 #_form_1_ ._form-title { line-height:22px; font-weight:600; margin-bottom:0; }
 #_form_1_:before,#_form_1_:after { content:" "; display:table; }
 #_form_1_:after { clear:both; }
 #_form_1_._inline-style { width:auto; display:inline-block; }
 #_form_1_._inline-style input[type="text"],#_form_1_._inline-style input[type="date"] { padding:10px 12px; }
 #_form_1_._inline-style button._inline-style { position:relative; top:27px; }
 #_form_1_._inline-style p { margin:0; }
 #_form_1_._inline-style ._button-wrapper { position:relative; margin:27px 12.5px 0 20px; }
 #_form_1_ ._form-thank-you { background: white; font-size: 24px; line-height: 1.4; color: #292f3b; font-weight: 500; border-radius: 2px; padding: 20px; font-size: 20px; position:relative; left:0; right:0; text-align:center; }
 @media all and (min-width:320px) and (max-width:667px) { #_form_1_._inline-form._inline-style ._inline-style._button-wrapper { margin-top:20px !important; margin-left:0 !important; }
 }
</style>










<form method="POST" action="https://bewegung.activehosted.com/proc.php" id="_form_1_" class="_form _form_1 _inline-form  _dark" novalidate>
  <input type="hidden" name="u" value="1" />
  <input type="hidden" name="f" value="1" />
  <input type="hidden" name="s" />
  <input type="hidden" name="c" value="0" />
  <input type="hidden" name="m" value="0" />
  <input type="hidden" name="act" value="sub" />
  <input type="hidden" name="v" value="2" />
  <div class="_form-content input-group">
    <div class="_form_element _x56820862 _full_width " >
      <div class="_field-wrapper ">
        <input type="text" name="firstname" placeholder="Ihren Vornamen" class="standard-input light" />
      </div>
    </div>
    <div class="_form_element _x48156171 _full_width " >
      <div class="_field-wrapper">
        <input type="text" name="email" placeholder="Ihre E-Mail" required class="standard-input light"/>
      </div>
    </div>
    <div class="_button-wrapper _full_width">
      <div class="checkbox-cont">
        <input type="checkbox" id="agree-check" onchange="document.getElementById('_form_1_submit').disabled = !this.checked;"/>
        <label for="agree-check">
          Ich habe die <a href="https://www.deineuropa.jetzt/datenschutz">Datenschutzerklärung</a> gelesen und erkläre mein Einverständnis zum Erhalt des Newsletters
        </label>
      </div>
      <button id="_form_1_submit" class="_submit standard-button button-outline-light" type="submit" disabled>
        Bleibe auf dem Laufenden!
      </button>
    </div>
    <div class="_clear-element">
    </div>
  </div>
  <div class="_form-thank-you" style="display:none;">
  </div>
</form>











<script type="text/javascript">
window.cfields = [];
window._show_thank_you = function(id, message, trackcmp_url) {
  var form = document.getElementById('_form_' + id + '_'), thank_you = form.querySelector('._form-thank-you');
  form.querySelector('._form-content').style.display = 'none';
  thank_you.innerHTML = message;
  thank_you.style.display = 'block';
  if (typeof(trackcmp_url) != 'undefined' && trackcmp_url) {
    // Site tracking URL to use after inline form submission.
    _load_script(trackcmp_url);
  }
  if (typeof window._form_callback !== 'undefined') window._form_callback(id);
};
window._show_error = function(id, message, html) {
  var form = document.getElementById('_form_' + id + '_'), err = document.createElement('div'), button = form.querySelector('button'), old_error = form.querySelector('._form_error');
  if (old_error) old_error.parentNode.removeChild(old_error);
  err.innerHTML = message;
  err.className = '_error-inner _form_error _no_arrow';
  var wrapper = document.createElement('div');
  wrapper.className = '_form-inner';
  wrapper.appendChild(err);
  button.parentNode.insertBefore(wrapper, button);
  document.querySelector('[id^="_form"][id$="_submit"]').disabled = false;
  if (html) {
    var div = document.createElement('div');
    div.className = '_error-html';
    div.innerHTML = html;
    err.appendChild(div);
  }
};
window._load_script = function(url, callback) {
    var head = document.querySelector('head'), script = document.createElement('script'), r = false;
    script.type = 'text/javascript';
    script.charset = 'utf-8';
    script.src = url;
    if (callback) {
      script.onload = script.onreadystatechange = function() {
      if (!r && (!this.readyState || this.readyState == 'complete')) {
        r = true;
        callback();
        }
      };
    }
    head.appendChild(script);
};
(function() {
  if (window.location.search.search("excludeform") !== -1) return false;
  var getCookie = function(name) {
    var match = document.cookie.match(new RegExp('(^|; )' + name + '=([^;]+)'));
    return match ? match[2] : null;
  }
  var setCookie = function(name, value) {
    var now = new Date();
    var time = now.getTime();
    var expireTime = time + 1000 * 60 * 60 * 24 * 365;
    now.setTime(expireTime);
    document.cookie = name + '=' + value + '; expires=' + now + ';path=/';
  }
      var addEvent = function(element, event, func) {
    if (element.addEventListener) {
      element.addEventListener(event, func);
    } else {
      var oldFunc = element['on' + event];
      element['on' + event] = function() {
        oldFunc.apply(this, arguments);
        func.apply(this, arguments);
      };
    }
  }
  var _removed = false;
  var form_to_submit = document.getElementById('_form_1_');
  var allInputs = form_to_submit.querySelectorAll('input, select, textarea'), tooltips = [], submitted = false;

  var getUrlParam = function(name) {
    var regexStr = '[\?&]' + name + '=([^&#]*)';
    var results = new RegExp(regexStr, 'i').exec(window.location.href);
    return results != undefined ? decodeURIComponent(results[1]) : false;
  };

  for (var i = 0; i < allInputs.length; i++) {
    var regexStr = "field\\[(\\d+)\\]";
    var results = new RegExp(regexStr).exec(allInputs[i].name);
    if (results != undefined) {
      allInputs[i].dataset.name = window.cfields[results[1]];
    } else {
      allInputs[i].dataset.name = allInputs[i].name;
    }
    var fieldVal = getUrlParam(allInputs[i].dataset.name);

    if (fieldVal) {
      if (allInputs[i].type == "radio" || allInputs[i].type == "checkbox") {
        if (allInputs[i].value == fieldVal) {
          allInputs[i].checked = true;
        }
      } else {
        allInputs[i].value = fieldVal;
      }
    }
  }

  var remove_tooltips = function() {
    for (var i = 0; i < tooltips.length; i++) {
      tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
    }
      tooltips = [];
  };
  var remove_tooltip = function(elem) {
    for (var i = 0; i < tooltips.length; i++) {
      if (tooltips[i].elem === elem) {
        tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
        tooltips.splice(i, 1);
        return;
      }
    }
  };
  var create_tooltip = function(elem, text) {
    var tooltip = document.createElement('div'), arrow = document.createElement('div'), inner = document.createElement('div'), new_tooltip = {};
    if (elem.type != 'radio' && elem.type != 'checkbox') {
      tooltip.className = '_error';
      arrow.className = '_error-arrow';
      inner.className = '_error-inner';
      inner.innerHTML = text;
      tooltip.appendChild(arrow);
      tooltip.appendChild(inner);
      elem.parentNode.appendChild(tooltip);
    } else {
      tooltip.className = '_error-inner _no_arrow';
      tooltip.innerHTML = text;
      elem.parentNode.insertBefore(tooltip, elem);
      new_tooltip.no_arrow = true;
    }
    new_tooltip.tip = tooltip;
    new_tooltip.elem = elem;
    tooltips.push(new_tooltip);
    return new_tooltip;
  };
  var resize_tooltip = function(tooltip) {
    var rect = tooltip.elem.getBoundingClientRect();
    var doc = document.documentElement, scrollPosition = rect.top - ((window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0));
    if (scrollPosition < 40) {
      tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _below';
    } else {
      tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _above';
    }
  };
  var resize_tooltips = function() {
    if (_removed) return;
    for (var i = 0; i < tooltips.length; i++) {
      if (!tooltips[i].no_arrow) resize_tooltip(tooltips[i]);
    }
  };
  var validate_field = function(elem, remove) {
    var tooltip = null, value = elem.value, no_error = true;
    remove ? remove_tooltip(elem) : false;
    if (elem.type != 'checkbox') elem.className = elem.className.replace(/ ?_has_error ?/g, '');
    if (elem.getAttribute('required') !== null) {
      if (elem.type == 'radio' || (elem.type == 'checkbox' && /any/.test(elem.className))) {
        var elems = form_to_submit.elements[elem.name];
        if (!(elems instanceof NodeList || elems instanceof HTMLCollection) || elems.length <= 1) {
          no_error = elem.checked;
        }
        else {
          no_error = false;
          for (var i = 0; i < elems.length; i++) {
            if (elems[i].checked) no_error = true;
          }
        }
        if (!no_error) {
          tooltip = create_tooltip(elem, "Bitte eine Option auswählen.");
        }
      } else if (elem.type =='checkbox') {
        var elems = form_to_submit.elements[elem.name], found = false, err = [];
        no_error = true;
        for (var i = 0; i < elems.length; i++) {
          if (elems[i].getAttribute('required') === null) continue;
          if (!found && elems[i] !== elem) return true;
          found = true;
          elems[i].className = elems[i].className.replace(/ ?_has_error ?/g, '');
          if (!elems[i].checked) {
            no_error = false;
            elems[i].className = elems[i].className + ' _has_error';
            err.push("Die Markierung von %s ist erforderlich.".replace("%s", elems[i].value));
          }
        }
        if (!no_error) {
          tooltip = create_tooltip(elem, err.join('<br/>'));
        }
      } else if (elem.tagName == 'SELECT') {
        var selected = true;
        if (elem.multiple) {
          selected = false;
          for (var i = 0; i < elem.options.length; i++) {
            if (elem.options[i].selected) {
              selected = true;
              break;
            }
          }
        } else {
          for (var i = 0; i < elem.options.length; i++) {
            if (elem.options[i].selected && !elem.options[i].value) {
              selected = false;
            }
          }
        }
        if (!selected) {
          elem.className = elem.className + ' _has_error';
          no_error = false;
          tooltip = create_tooltip(elem, "Bitte eine Option auswählen.");
        }
      } else if (value === undefined || value === null || value === '') {
        elem.className = elem.className + ' _has_error';
        no_error = false;
        tooltip = create_tooltip(elem, "Bitte füllen Sie das markierte Pflichtfeld aus.");
      }
    }
    if (no_error && elem.name == 'email') {
      if (!value.match(/^[\+_a-z0-9-'&=]+(\.[\+_a-z0-9-']+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i)) {
        elem.className = elem.className + ' _has_error';
        no_error = false;
        tooltip = create_tooltip(elem, "Geben Sie eine gültige E-Mail-Adresse ein.");
      }
    }
    if (no_error && /date_field/.test(elem.className)) {
      if (!value.match(/^\d\d\d\d-\d\d-\d\d$/)) {
        elem.className = elem.className + ' _has_error';
        no_error = false;
        tooltip = create_tooltip(elem, "Gültiges Datum eingeben");
      }
    }
    tooltip ? resize_tooltip(tooltip) : false;
    return no_error;
  };
  var needs_validate = function(el) {
    return el.name == 'email' || el.getAttribute('required') !== null;
  };
  var validate_form = function(e) {
    var err = form_to_submit.querySelector('._form_error'), no_error = true;
    if (!submitted) {
      submitted = true;
      for (var i = 0, len = allInputs.length; i < len; i++) {
        var input = allInputs[i];
        if (needs_validate(input)) {
          if (input.type == 'text') {
            addEvent(input, 'blur', function() {
              this.value = this.value.trim();
              validate_field(this, true);
            });
            addEvent(input, 'input', function() {
              validate_field(this, true);
            });
          } else if (input.type == 'radio' || input.type == 'checkbox') {
            (function(el) {
              var radios = form_to_submit.elements[el.name];
              for (var i = 0; i < radios.length; i++) {
                addEvent(radios[i], 'click', function() {
                  validate_field(el, true);
                });
              }
            })(input);
          } else if (input.tagName == 'SELECT') {
            addEvent(input, 'change', function() {
              validate_field(this, true);
            });
          }
        }
      }
    }
    remove_tooltips();
    for (var i = 0, len = allInputs.length; i < len; i++) {
      var elem = allInputs[i];
      if (needs_validate(elem)) {
        if (elem.tagName.toLowerCase() !== "select") {
          elem.value = elem.value.trim();
        }
        validate_field(elem) ? true : no_error = false;
      }
    }
    if (!no_error && e) {
      e.preventDefault();
    }
    resize_tooltips();
    return no_error;
  };
  addEvent(window, 'resize', resize_tooltips);
  addEvent(window, 'scroll', resize_tooltips);
  window._old_serialize = null;
  if (typeof serialize !== 'undefined') window._old_serialize = window.serialize;
  _load_script("//d3rxaij56vjege.cloudfront.net/form-serialize/0.3/serialize.min.js", function() {
    window._form_serialize = window.serialize;
    if (window._old_serialize) window.serialize = window._old_serialize;
  });
  var form_submit = function(e) {
    e.preventDefault();
    if (validate_form()) {
      // use this trick to get the submit button & disable it using plain javascript
      document.querySelector('#_form_1_submit').disabled = true;
            var serialized = _form_serialize(document.getElementById('_form_1_'));
      var err = form_to_submit.querySelector('._form_error');
      err ? err.parentNode.removeChild(err) : false;
      _load_script('https://bewegung.activehosted.com/proc.php?' + serialized + '&jsonp=true');
    }
    return false;
  };
  addEvent(form_to_submit, 'submit', form_submit);
})();

</script>


	  </div>
	</div>


  <div class="container bottom-link-container centered">
    <p><a id="actions-link"><?php echo get_field('front-page-reveal'); ?></a></p>
  </div>
</div>
<div class="section warm-dark" id="main-actions">
  <div class="container">
    <div class="main-actions columns three-columns">
      <div class="column first">
        <h3><?php echo get_field('front-page-action-1'); ?></h3>
        <?php echo get_field('embed_donation'); ?>
      </div>
      <div class="column second">
        <h3><?php echo get_field('front-page-action-2'); ?></h3>
        <!--<a class="standard-button button-outline" href="/">Mitmachen</a><br/><br/>-->
		  <img src="<?php echo get_theme_file_uri('/images/GroupHands.svg')?>">  
		<a class="standard-button button-full" href="https://www.deineuropa.jetzt/mitgliedschaft/">Mitglied werden</a>
      </div>
      <div class="column third">
        <h3><?php echo get_field('front-page-action-3'); ?></h3>
		  <img src="<?php echo get_theme_file_uri('/images/Group3.svg')?>">  
        <a class="standard-button button-full" href="<?php echo get_post_type_archive_link('event'); ?>">Events</a>
      </div>
    </div>
  </div>
</div>


<div class="section gray extra-padding">
    <div class="container narrow bottom-padded centered">
      <h2>Radikal europäisch: Kandidat<span class="asterisk">*</span>innen aus sieben Ländern Europas!</h2>
      <p>Wir denken radikal europäisch. Deshalb haben wir tausende Menschen aus ganz Europa gefragt, wer sie in Brüssel vertreten soll. Das Ergebnis waren zwanzig großartige Menschen aus sieben Ländern!</p>
  </div>
  <div class="container">
    <div class="candidates-grid">
      <?php 
        $homeCandidates = new WP_Query(array(
          'posts_per_page' => 4,
          'post_type' => 'candidate',
          'meta_key' => 'order',
          'orderby' => 'meta_value_num',
          'order' => 'ASC'
        ));

        while($homeCandidates->have_posts()) {
          $homeCandidates->the_post(); ?>

          <div class="candidate">
            <div class="image-cont"><?php the_post_thumbnail('medium'); ?></div>
            <div class="info-cont">
              <h3 class="headline headline--medium headline--post-title"><?php the_title(); ?></h3>
              <p><?php echo get_field('profession'); ?></p>
              <p><a class="standard-button button-outline compact invisible" href="<?php the_permalink(); ?>">Mehr erfahren</a></p>
            </div>
          </div>
      <?php } ?>
    </div>
    <div class="container top-padded centered">
      <p><a class="standard-button button-outline" href="<?php echo get_post_type_archive_link('candidate'); ?>">Alle Kandidat*innen</a></p>
    </div>

  </div>
</div>









<div class="section gray some-padding" >
  <div class="container narrow centered quote">
    <h3>“Europa muss demokratisiert werden - oder es wird zerbrechen."</h3>
    <h4><a>– Yanis Varoufakis</a></h4>
    <!--<div class="right-aligner">
       <a class="share-it dark subtle">
      <img src="<?php echo get_theme_file_uri('/images/share-dark.svg')?>">   
     <span class="share-text">Teilen</span>
    </a>
    </div>-->
  </div>
	
</div>
<div class="section gray extra-padding last-section">
  <div class="container narrow centered">
    <h2>Ein Programm für ganz Europa!</h2>
    <p>Demokratie in Europa ist Teil des Bündnis “European Spring”. In sieben europäischen Ländern treten wir im Mai 2019 mit einem gemeinsamen Programm zur Europawahl an.</p>
  </div>
  <div class="container top-padded centered">
      <p><a class="standard-button button-outline" href="<?php echo site_url('/european-spring') ?>">Mehr erfahren</a></p>
    </div>
</div>

<?php } get_footer(); ?>