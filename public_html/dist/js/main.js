/*! Backstretch - v2.0.4 - 2013-06-19

* http://srobbin.com/jquery-plugins/backstretch/ 

* Copyright (c) 2013 Scott Robbin; Licensed MIT */

(function(a,d,p){a.fn.backstretch=function(c,b){(c===p||0===c.length)&&a.error("No images were supplied for Backstretch");0===a(d).scrollTop()&&d.scrollTo(0,0);return this.each(function(){var d=a(this),g=d.data("backstretch");if(g){if("string"==typeof c&&"function"==typeof g[c]){g[c](b);return}b=a.extend(g.options,b);g.destroy(!0)}g=new q(this,c,b);d.data("backstretch",g)})};a.backstretch=function(c,b){return a("body").backstretch(c,b).data("backstretch")};a.expr[":"].backstretch=function(c){return a(c).data("backstretch")!==p};a.fn.backstretch.defaults={centeredX:!0,centeredY:!0,duration:5E3,fade:0};var r={left:0,top:0,overflow:"hidden",margin:0,padding:0,height:"100%",width:"100%",zIndex:-999999},s={position:"absolute",display:"none",margin:0,padding:0,border:"none",width:"auto",height:"auto",maxHeight:"none",maxWidth:"none",zIndex:-999999},q=function(c,b,e){this.options=a.extend({},a.fn.backstretch.defaults,e||{});this.images=a.isArray(b)?b:[b];a.each(this.images,function(){a("<img />")[0].src=this});this.isBody=c===document.body;this.$container=a(c);this.$root=this.isBody?l?a(d):a(document):this.$container;c=this.$container.children(".backstretch").first();this.$wrap=c.length?c:a('<div class="backstretch"></div>').css(r).appendTo(this.$container);this.isBody||(c=this.$container.css("position"),b=this.$container.css("zIndex"),this.$container.css({position:"static"===c?"relative":c,zIndex:"auto"===b?0:b,background:"none"}),this.$wrap.css({zIndex:-999998}));this.$wrap.css({position:this.isBody&&l?"fixed":"absolute"});this.index=0;this.show(this.index);a(d).on("resize.backstretch",a.proxy(this.resize,this)).on("orientationchange.backstretch",a.proxy(function(){this.isBody&&0===d.pageYOffset&&(d.scrollTo(0,1),this.resize())},this))};q.prototype={resize:function(){try{var a={left:0,top:0},b=this.isBody?this.$root.width():this.$root.innerWidth(),e=b,g=this.isBody?d.innerHeight?d.innerHeight:this.$root.height():this.$root.innerHeight(),j=e/this.$img.data("ratio"),f;j>=g?(f=(j-g)/2,this.options.centeredY&&(a.top="-"+f+"px")):(j=g,e=j*this.$img.data("ratio"),f=(e-b)/2,this.options.centeredX&&(a.left="-"+f+"px"));this.$wrap.css({width:b,height:g}).find("img:not(.deleteable)").css({width:e,height:j}).css(a)}catch(h){}return this},show:function(c){if(!(Math.abs(c)>this.images.length-1)){var b=this,e=b.$wrap.find("img").addClass("deleteable"),d={relatedTarget:b.$container[0]};b.$container.trigger(a.Event("backstretch.before",d),[b,c]);this.index=c;clearInterval(b.interval);b.$img=a("<img />").css(s).bind("load",function(f){var h=this.width||a(f.target).width();f=this.height||a(f.target).height();a(this).data("ratio",h/f);a(this).fadeIn(b.options.speed||b.options.fade,function(){e.remove();b.paused||b.cycle();a(["after","show"]).each(function(){b.$container.trigger(a.Event("backstretch."+this,d),[b,c])})});b.resize()}).appendTo(b.$wrap);b.$img.attr("src",b.images[c]);return b}},next:function(){return this.show(this.index<this.images.length-1?this.index+1:0)},prev:function(){return this.show(0===this.index?this.images.length-1:this.index-1)},pause:function(){this.paused=!0;return this},resume:function(){this.paused=!1;this.next();return this},cycle:function(){1<this.images.length&&(clearInterval(this.interval),this.interval=setInterval(a.proxy(function(){this.paused||this.next()},this),this.options.duration));return this},destroy:function(c){a(d).off("resize.backstretch orientationchange.backstretch");clearInterval(this.interval);c||this.$wrap.remove();this.$container.removeData("backstretch")}};var l,f=navigator.userAgent,m=navigator.platform,e=f.match(/AppleWebKit\/([0-9]+)/),e=!!e&&e[1],h=f.match(/Fennec\/([0-9]+)/),h=!!h&&h[1],n=f.match(/Opera Mobi\/([0-9]+)/),t=!!n&&n[1],k=f.match(/MSIE ([0-9]+)/),k=!!k&&k[1];l=!((-1<m.indexOf("iPhone")||-1<m.indexOf("iPad")||-1<m.indexOf("iPod"))&&e&&534>e||d.operamini&&"[object OperaMini]"==={}.toString.call(d.operamini)||n&&7458>t||-1<f.indexOf("Android")&&e&&533>e||h&&6>h||"palmGetResource"in d&&e&&534>e||-1<f.indexOf("MeeGo")&&-1<f.indexOf("NokiaBrowser/8.5.0")||k&&6>=k)})(jQuery,window);;!function(){function a(b){var c=a.modules[b];if(!c)throw new Error('failed to require "'+b+'"');return"exports"in c||"function"!=typeof c.definition||(c.client=c.component=!0,c.definition.call(this,c.exports={},c),delete c.definition),c.exports}a.modules={},a.register=function(b,c){a.modules[b]={definition:c}},a.define=function(b,c){a.modules[b]={exports:c}},a.register("dropzone",function(b,c){c.exports=a("dropzone/lib/dropzone.js")}),a.register("dropzone/lib/dropzone.js",function(a,b){(function(){var a,c,d,e,f,g,h,i,j=[].slice,k={}.hasOwnProperty,l=function(a,b){function c(){this.constructor=a}for(var d in b)k.call(b,d)&&(a[d]=b[d]);return c.prototype=b.prototype,a.prototype=new c,a.__super__=b.prototype,a};h=function(){},c=function(){function a(){}return a.prototype.addEventListener=a.prototype.on,a.prototype.on=function(a,b){return this._callbacks=this._callbacks||{},this._callbacks[a]||(this._callbacks[a]=[]),this._callbacks[a].push(b),this},a.prototype.emit=function(){var a,b,c,d,e,f;if(d=arguments[0],a=2<=arguments.length?j.call(arguments,1):[],this._callbacks=this._callbacks||{},c=this._callbacks[d])for(e=0,f=c.length;f>e;e++)b=c[e],b.apply(this,a);return this},a.prototype.removeListener=a.prototype.off,a.prototype.removeAllListeners=a.prototype.off,a.prototype.removeEventListener=a.prototype.off,a.prototype.off=function(a,b){var c,d,e,f,g;if(!this._callbacks||0===arguments.length)return this._callbacks={},this;if(d=this._callbacks[a],!d)return this;if(1===arguments.length)return delete this._callbacks[a],this;for(e=f=0,g=d.length;g>f;e=++f)if(c=d[e],c===b){d.splice(e,1);break}return this},a}(),a=function(a){function b(a,c){var e,f,g;if(this.element=a,this.version=b.version,this.defaultOptions.previewTemplate=this.defaultOptions.previewTemplate.replace(/\n*/g,""),this.clickableElements=[],this.listeners=[],this.files=[],"string"==typeof this.element&&(this.element=document.querySelector(this.element)),!this.element||null==this.element.nodeType)throw new Error("Invalid dropzone element.");if(this.element.dropzone)throw new Error("Dropzone already attached.");if(b.instances.push(this),this.element.dropzone=this,e=null!=(g=b.optionsForElement(this.element))?g:{},this.options=d({},this.defaultOptions,e,null!=c?c:{}),this.options.forceFallback||!b.isBrowserSupported())return this.options.fallback.call(this);if(null==this.options.url&&(this.options.url=this.element.getAttribute("action")),!this.options.url)throw new Error("No URL provided.");if(this.options.acceptedFiles&&this.options.acceptedMimeTypes)throw new Error("You can't provide both 'acceptedFiles' and 'acceptedMimeTypes'. 'acceptedMimeTypes' is deprecated.");this.options.acceptedMimeTypes&&(this.options.acceptedFiles=this.options.acceptedMimeTypes,delete this.options.acceptedMimeTypes),this.options.method=this.options.method.toUpperCase(),(f=this.getExistingFallback())&&f.parentNode&&f.parentNode.removeChild(f),this.options.previewsContainer!==!1&&(this.previewsContainer=this.options.previewsContainer?b.getElement(this.options.previewsContainer,"previewsContainer"):this.element),this.options.clickable&&(this.clickableElements=this.options.clickable===!0?[this.element]:b.getElements(this.options.clickable,"clickable")),this.init()}var d,e;return l(b,a),b.prototype.Emitter=c,b.prototype.events=["drop","dragstart","dragend","dragenter","dragover","dragleave","addedfile","removedfile","thumbnail","error","errormultiple","processing","processingmultiple","uploadprogress","totaluploadprogress","sending","sendingmultiple","success","successmultiple","canceled","canceledmultiple","complete","completemultiple","reset","maxfilesexceeded","maxfilesreached","queuecomplete"],b.prototype.defaultOptions={url:null,method:"post",withCredentials:!1,parallelUploads:2,uploadMultiple:!1,maxFilesize:256,paramName:"file",createImageThumbnails:!0,maxThumbnailFilesize:10,thumbnailWidth:100,thumbnailHeight:100,maxFiles:null,params:{},clickable:!0,ignoreHiddenFiles:!0,acceptedFiles:null,acceptedMimeTypes:null,autoProcessQueue:!0,autoQueue:!0,addRemoveLinks:!1,previewsContainer:null,capture:null,dictDefaultMessage:"Déposer des fichiers ici pour télécharger",dictFallbackMessage:"Your browser does not support drag'n'drop file uploads.",dictFallbackText:"Please use the fallback form below to upload your files like in the olden days.",dictFileTooBig:"File is too big ({{filesize}}MiB). Max filesize: {{maxFilesize}}MiB.",dictInvalidFileType:"You can't upload files of this type.",dictResponseError:"Server responded with {{statusCode}} code.",dictCancelUpload:"Cancel upload",dictCancelUploadConfirmation:"Are you sure you want to cancel this upload?",dictRemoveFile:"Remove file",dictRemoveFileConfirmation:null,dictMaxFilesExceeded:"You can not upload any more files.",accept:function(a,b){return b()},init:function(){return h},forceFallback:!1,fallback:function(){var a,c,d,e,f,g;for(this.element.className=""+this.element.className+" dz-browser-not-supported",g=this.element.getElementsByTagName("div"),e=0,f=g.length;f>e;e++)a=g[e],/(^| )dz-message($| )/.test(a.className)&&(c=a,a.className="dz-message");return c||(c=b.createElement('<div class="dz-message"><span></span></div>'),this.element.appendChild(c)),d=c.getElementsByTagName("span")[0],d&&(d.textContent=this.options.dictFallbackMessage),this.element.appendChild(this.getFallbackForm())},resize:function(a){var b,c,d;return b={srcX:0,srcY:0,srcWidth:a.width,srcHeight:a.height},c=a.width/a.height,b.optWidth=this.options.thumbnailWidth,b.optHeight=this.options.thumbnailHeight,null==b.optWidth&&null==b.optHeight?(b.optWidth=b.srcWidth,b.optHeight=b.srcHeight):null==b.optWidth?b.optWidth=c*b.optHeight:null==b.optHeight&&(b.optHeight=1/c*b.optWidth),d=b.optWidth/b.optHeight,a.height<b.optHeight||a.width<b.optWidth?(b.trgHeight=b.srcHeight,b.trgWidth=b.srcWidth):c>d?(b.srcHeight=a.height,b.srcWidth=b.srcHeight*d):(b.srcWidth=a.width,b.srcHeight=b.srcWidth/d),b.srcX=(a.width-b.srcWidth)/2,b.srcY=(a.height-b.srcHeight)/2,b},drop:function(){return this.element.classList.remove("dz-drag-hover")},dragstart:h,dragend:function(){return this.element.classList.remove("dz-drag-hover")},dragenter:function(){return this.element.classList.add("dz-drag-hover")},dragover:function(){return this.element.classList.add("dz-drag-hover")},dragleave:function(){return this.element.classList.remove("dz-drag-hover")},paste:h,reset:function(){return this.element.classList.remove("dz-started")},addedfile:function(a){var c,d,e,f,g,h,i,j,k,l,m,n,o;if(this.element===this.previewsContainer&&this.element.classList.add("dz-started"),this.previewsContainer){for(a.previewElement=b.createElement(this.options.previewTemplate.trim()),a.previewTemplate=a.previewElement,this.previewsContainer.appendChild(a.previewElement),l=a.previewElement.querySelectorAll("[data-dz-name]"),f=0,i=l.length;i>f;f++)c=l[f],c.textContent=a.name;for(m=a.previewElement.querySelectorAll("[data-dz-size]"),g=0,j=m.length;j>g;g++)c=m[g],c.innerHTML=this.filesize(a.size);for(this.options.addRemoveLinks&&(a._removeLink=b.createElement('<a class="dz-remove" href="javascript:undefined;" data-dz-remove>'+this.options.dictRemoveFile+"</a>"),a.previewElement.appendChild(a._removeLink)),d=function(c){return function(d){return d.preventDefault(),d.stopPropagation(),a.status===b.UPLOADING?b.confirm(c.options.dictCancelUploadConfirmation,function(){return c.removeFile(a)}):c.options.dictRemoveFileConfirmation?b.confirm(c.options.dictRemoveFileConfirmation,function(){return c.removeFile(a)}):c.removeFile(a)}}(this),n=a.previewElement.querySelectorAll("[data-dz-remove]"),o=[],h=0,k=n.length;k>h;h++)e=n[h],o.push(e.addEventListener("click",d));return o}},removedfile:function(a){var b;return a.previewElement&&null!=(b=a.previewElement)&&b.parentNode.removeChild(a.previewElement),this._updateMaxFilesReachedClass()},thumbnail:function(a,b){var c,d,e,f,g;if(a.previewElement){for(a.previewElement.classList.remove("dz-file-preview"),a.previewElement.classList.add("dz-image-preview"),f=a.previewElement.querySelectorAll("[data-dz-thumbnail]"),g=[],d=0,e=f.length;e>d;d++)c=f[d],c.alt=a.name,g.push(c.src=b);return g}},error:function(a,b){var c,d,e,f,g;if(a.previewElement){for(a.previewElement.classList.add("dz-error"),"String"!=typeof b&&b.error&&(b=b.error),f=a.previewElement.querySelectorAll("[data-dz-errormessage]"),g=[],d=0,e=f.length;e>d;d++)c=f[d],g.push(c.textContent=b);return g}},errormultiple:h,processing:function(a){return a.previewElement&&(a.previewElement.classList.add("dz-processing"),a._removeLink)?a._removeLink.textContent=this.options.dictCancelUpload:void 0},processingmultiple:h,uploadprogress:function(a,b){var c,d,e,f,g;if(a.previewElement){for(f=a.previewElement.querySelectorAll("[data-dz-uploadprogress]"),g=[],d=0,e=f.length;e>d;d++)c=f[d],g.push("PROGRESS"===c.nodeName?c.value=b:c.style.width=""+b+"%");return g}},totaluploadprogress:h,sending:h,sendingmultiple:h,success:function(a){return a.previewElement?a.previewElement.classList.add("dz-success"):void 0},successmultiple:h,canceled:function(a){return this.emit("error",a,"Upload canceled.")},canceledmultiple:h,complete:function(a){return a._removeLink?a._removeLink.textContent=this.options.dictRemoveFile:void 0},completemultiple:h,maxfilesexceeded:h,maxfilesreached:h,queuecomplete:h,previewTemplate:'<div class="dz-preview dz-file-preview">\n  <div class="dz-details">\n    <div class="dz-filename"><span data-dz-name></span></div>\n    <div class="dz-size" data-dz-size></div>\n    <img data-dz-thumbnail />\n  </div>\n  <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>\n  <div class="dz-success-mark"><span>✔</span></div>\n  <div class="dz-error-mark"><span>✘</span></div>\n  <div class="dz-error-message"><span data-dz-errormessage></span></div>\n</div>'},d=function(){var a,b,c,d,e,f,g;for(d=arguments[0],c=2<=arguments.length?j.call(arguments,1):[],f=0,g=c.length;g>f;f++){b=c[f];for(a in b)e=b[a],d[a]=e}return d},b.prototype.getAcceptedFiles=function(){var a,b,c,d,e;for(d=this.files,e=[],b=0,c=d.length;c>b;b++)a=d[b],a.accepted&&e.push(a);return e},b.prototype.getRejectedFiles=function(){var a,b,c,d,e;for(d=this.files,e=[],b=0,c=d.length;c>b;b++)a=d[b],a.accepted||e.push(a);return e},b.prototype.getFilesWithStatus=function(a){var b,c,d,e,f;for(e=this.files,f=[],c=0,d=e.length;d>c;c++)b=e[c],b.status===a&&f.push(b);return f},b.prototype.getQueuedFiles=function(){return this.getFilesWithStatus(b.QUEUED)},b.prototype.getUploadingFiles=function(){return this.getFilesWithStatus(b.UPLOADING)},b.prototype.getActiveFiles=function(){var a,c,d,e,f;for(e=this.files,f=[],c=0,d=e.length;d>c;c++)a=e[c],(a.status===b.UPLOADING||a.status===b.QUEUED)&&f.push(a);return f},b.prototype.init=function(){var a,c,d,e,f,g,h;for("form"===this.element.tagName&&this.element.setAttribute("enctype","multipart/form-data"),this.element.classList.contains("dropzone")&&!this.element.querySelector(".dz-message")&&this.element.appendChild(b.createElement('<div class="dz-default dz-message"><span>'+this.options.dictDefaultMessage+"</span></div>")),this.clickableElements.length&&(d=function(a){return function(){return a.hiddenFileInput&&document.body.removeChild(a.hiddenFileInput),a.hiddenFileInput=document.createElement("input"),a.hiddenFileInput.setAttribute("type","file"),(null==a.options.maxFiles||a.options.maxFiles>1)&&a.hiddenFileInput.setAttribute("multiple","multiple"),a.hiddenFileInput.className="dz-hidden-input",null!=a.options.acceptedFiles&&a.hiddenFileInput.setAttribute("accept",a.options.acceptedFiles),null!=a.options.capture&&a.hiddenFileInput.setAttribute("capture",a.options.capture),a.hiddenFileInput.style.visibility="hidden",a.hiddenFileInput.style.position="absolute",a.hiddenFileInput.style.top="0",a.hiddenFileInput.style.left="0",a.hiddenFileInput.style.height="0",a.hiddenFileInput.style.width="0",document.body.appendChild(a.hiddenFileInput),a.hiddenFileInput.addEventListener("change",function(){var b,c,e,f;if(c=a.hiddenFileInput.files,c.length)for(e=0,f=c.length;f>e;e++)b=c[e],a.addFile(b);return d()})}}(this))(),this.URL=null!=(g=window.URL)?g:window.webkitURL,h=this.events,e=0,f=h.length;f>e;e++)a=h[e],this.on(a,this.options[a]);return this.on("uploadprogress",function(a){return function(){return a.updateTotalUploadProgress()}}(this)),this.on("removedfile",function(a){return function(){return a.updateTotalUploadProgress()}}(this)),this.on("canceled",function(a){return function(b){return a.emit("complete",b)}}(this)),this.on("complete",function(a){return function(){return 0===a.getUploadingFiles().length&&0===a.getQueuedFiles().length?setTimeout(function(){return a.emit("queuecomplete")},0):void 0}}(this)),c=function(a){return a.stopPropagation(),a.preventDefault?a.preventDefault():a.returnValue=!1},this.listeners=[{element:this.element,events:{dragstart:function(a){return function(b){return a.emit("dragstart",b)}}(this),dragenter:function(a){return function(b){return c(b),a.emit("dragenter",b)}}(this),dragover:function(a){return function(b){var d;try{d=b.dataTransfer.effectAllowed}catch(e){}return b.dataTransfer.dropEffect="move"===d||"linkMove"===d?"move":"copy",c(b),a.emit("dragover",b)}}(this),dragleave:function(a){return function(b){return a.emit("dragleave",b)}}(this),drop:function(a){return function(b){return c(b),a.drop(b)}}(this),dragend:function(a){return function(b){return a.emit("dragend",b)}}(this)}}],this.clickableElements.forEach(function(a){return function(c){return a.listeners.push({element:c,events:{click:function(d){return c!==a.element||d.target===a.element||b.elementInside(d.target,a.element.querySelector(".dz-message"))?a.hiddenFileInput.click():void 0}}})}}(this)),this.enable(),this.options.init.call(this)},b.prototype.destroy=function(){var a;return this.disable(),this.removeAllFiles(!0),(null!=(a=this.hiddenFileInput)?a.parentNode:void 0)&&(this.hiddenFileInput.parentNode.removeChild(this.hiddenFileInput),this.hiddenFileInput=null),delete this.element.dropzone,b.instances.splice(b.instances.indexOf(this),1)},b.prototype.updateTotalUploadProgress=function(){var a,b,c,d,e,f,g,h;if(d=0,c=0,a=this.getActiveFiles(),a.length){for(h=this.getActiveFiles(),f=0,g=h.length;g>f;f++)b=h[f],d+=b.upload.bytesSent,c+=b.upload.total;e=100*d/c}else e=100;return this.emit("totaluploadprogress",e,c,d)},b.prototype._getParamName=function(a){return"function"==typeof this.options.paramName?this.options.paramName(a):""+this.options.paramName+(this.options.uploadMultiple?"["+a+"]":"")},b.prototype.getFallbackForm=function(){var a,c,d,e;return(a=this.getExistingFallback())?a:(d='<div class="dz-fallback">',this.options.dictFallbackText&&(d+="<p>"+this.options.dictFallbackText+"</p>"),d+='<input type="file" name="'+this._getParamName(0)+'" '+(this.options.uploadMultiple?'multiple="multiple"':void 0)+' /><input type="submit" value="Upload!"></div>',c=b.createElement(d),"FORM"!==this.element.tagName?(e=b.createElement('<form action="'+this.options.url+'" enctype="multipart/form-data" method="'+this.options.method+'"></form>'),e.appendChild(c)):(this.element.setAttribute("enctype","multipart/form-data"),this.element.setAttribute("method",this.options.method)),null!=e?e:c)},b.prototype.getExistingFallback=function(){var a,b,c,d,e,f;for(b=function(a){var b,c,d;for(c=0,d=a.length;d>c;c++)if(b=a[c],/(^| )fallback($| )/.test(b.className))return b},f=["div","form"],d=0,e=f.length;e>d;d++)if(c=f[d],a=b(this.element.getElementsByTagName(c)))return a},b.prototype.setupEventListeners=function(){var a,b,c,d,e,f,g;for(f=this.listeners,g=[],d=0,e=f.length;e>d;d++)a=f[d],g.push(function(){var d,e;d=a.events,e=[];for(b in d)c=d[b],e.push(a.element.addEventListener(b,c,!1));return e}());return g},b.prototype.removeEventListeners=function(){var a,b,c,d,e,f,g;for(f=this.listeners,g=[],d=0,e=f.length;e>d;d++)a=f[d],g.push(function(){var d,e;d=a.events,e=[];for(b in d)c=d[b],e.push(a.element.removeEventListener(b,c,!1));return e}());return g},b.prototype.disable=function(){var a,b,c,d,e;for(this.clickableElements.forEach(function(a){return a.classList.remove("dz-clickable")}),this.removeEventListeners(),d=this.files,e=[],b=0,c=d.length;c>b;b++)a=d[b],e.push(this.cancelUpload(a));return e},b.prototype.enable=function(){return this.clickableElements.forEach(function(a){return a.classList.add("dz-clickable")}),this.setupEventListeners()},b.prototype.filesize=function(a){var b;return a>=109951162777.6?(a/=109951162777.6,b="TiB"):a>=107374182.4?(a/=107374182.4,b="GiB"):a>=104857.6?(a/=104857.6,b="MiB"):a>=102.4?(a/=102.4,b="KiB"):(a=10*a,b="b"),"<strong>"+Math.round(a)/10+"</strong> "+b},b.prototype._updateMaxFilesReachedClass=function(){return null!=this.options.maxFiles&&this.getAcceptedFiles().length>=this.options.maxFiles?(this.getAcceptedFiles().length===this.options.maxFiles&&this.emit("maxfilesreached",this.files),this.element.classList.add("dz-max-files-reached")):this.element.classList.remove("dz-max-files-reached")},b.prototype.drop=function(a){var b,c;a.dataTransfer&&(this.emit("drop",a),b=a.dataTransfer.files,b.length&&(c=a.dataTransfer.items,c&&c.length&&null!=c[0].webkitGetAsEntry?this._addFilesFromItems(c):this.handleFiles(b)))},b.prototype.paste=function(a){var b,c;if(null!=(null!=a&&null!=(c=a.clipboardData)?c.items:void 0))return this.emit("paste",a),b=a.clipboardData.items,b.length?this._addFilesFromItems(b):void 0},b.prototype.handleFiles=function(a){var b,c,d,e;for(e=[],c=0,d=a.length;d>c;c++)b=a[c],e.push(this.addFile(b));return e},b.prototype._addFilesFromItems=function(a){var b,c,d,e,f;for(f=[],d=0,e=a.length;e>d;d++)c=a[d],f.push(null!=c.webkitGetAsEntry&&(b=c.webkitGetAsEntry())?b.isFile?this.addFile(c.getAsFile()):b.isDirectory?this._addFilesFromDirectory(b,b.name):void 0:null!=c.getAsFile?null==c.kind||"file"===c.kind?this.addFile(c.getAsFile()):void 0:void 0);return f},b.prototype._addFilesFromDirectory=function(a,b){var c,d;return c=a.createReader(),d=function(a){return function(c){var d,e,f;for(e=0,f=c.length;f>e;e++)d=c[e],d.isFile?d.file(function(c){return a.options.ignoreHiddenFiles&&"."===c.name.substring(0,1)?void 0:(c.fullPath=""+b+"/"+c.name,a.addFile(c))}):d.isDirectory&&a._addFilesFromDirectory(d,""+b+"/"+d.name)}}(this),c.readEntries(d,function(a){return"undefined"!=typeof console&&null!==console&&"function"==typeof console.log?console.log(a):void 0})},b.prototype.accept=function(a,c){return a.size>1024*this.options.maxFilesize*1024?c(this.options.dictFileTooBig.replace("{{filesize}}",Math.round(a.size/1024/10.24)/100).replace("{{maxFilesize}}",this.options.maxFilesize)):b.isValidFile(a,this.options.acceptedFiles)?null!=this.options.maxFiles&&this.getAcceptedFiles().length>=this.options.maxFiles?(c(this.options.dictMaxFilesExceeded.replace("{{maxFiles}}",this.options.maxFiles)),this.emit("maxfilesexceeded",a)):this.options.accept.call(this,a,c):c(this.options.dictInvalidFileType)},b.prototype.addFile=function(a){return a.upload={progress:0,total:a.size,bytesSent:0},this.files.push(a),a.status=b.ADDED,this.emit("addedfile",a),this._enqueueThumbnail(a),this.accept(a,function(b){return function(c){return c?(a.accepted=!1,b._errorProcessing([a],c)):(a.accepted=!0,b.options.autoQueue&&b.enqueueFile(a)),b._updateMaxFilesReachedClass()}}(this))},b.prototype.enqueueFiles=function(a){var b,c,d;for(c=0,d=a.length;d>c;c++)b=a[c],this.enqueueFile(b);return null},b.prototype.enqueueFile=function(a){if(a.status!==b.ADDED||a.accepted!==!0)throw new Error("This file can't be queued because it has already been processed or was rejected.");return a.status=b.QUEUED,this.options.autoProcessQueue?setTimeout(function(a){return function(){return a.processQueue()}}(this),0):void 0},b.prototype._thumbnailQueue=[],b.prototype._processingThumbnail=!1,b.prototype._enqueueThumbnail=function(a){return this.options.createImageThumbnails&&a.type.match(/image.*/)&&a.size<=1024*this.options.maxThumbnailFilesize*1024?(this._thumbnailQueue.push(a),setTimeout(function(a){return function(){return a._processThumbnailQueue()}}(this),0)):void 0},b.prototype._processThumbnailQueue=function(){return this._processingThumbnail||0===this._thumbnailQueue.length?void 0:(this._processingThumbnail=!0,this.createThumbnail(this._thumbnailQueue.shift(),function(a){return function(){return a._processingThumbnail=!1,a._processThumbnailQueue()}}(this)))},b.prototype.removeFile=function(a){return a.status===b.UPLOADING&&this.cancelUpload(a),this.files=i(this.files,a),this.emit("removedfile",a),0===this.files.length?this.emit("reset"):void 0},b.prototype.removeAllFiles=function(a){var c,d,e,f;for(null==a&&(a=!1),f=this.files.slice(),d=0,e=f.length;e>d;d++)c=f[d],(c.status!==b.UPLOADING||a)&&this.removeFile(c);return null},b.prototype.createThumbnail=function(a,b){var c;return c=new FileReader,c.onload=function(d){return function(){var e;return"image/svg+xml"===a.type?(d.emit("thumbnail",a,c.result),void(null!=b&&b())):(e=document.createElement("img"),e.onload=function(){var c,f,h,i,j,k,l,m;return a.width=e.width,a.height=e.height,h=d.options.resize.call(d,a),null==h.trgWidth&&(h.trgWidth=h.optWidth),null==h.trgHeight&&(h.trgHeight=h.optHeight),c=document.createElement("canvas"),f=c.getContext("2d"),c.width=h.trgWidth,c.height=h.trgHeight,g(f,e,null!=(j=h.srcX)?j:0,null!=(k=h.srcY)?k:0,h.srcWidth,h.srcHeight,null!=(l=h.trgX)?l:0,null!=(m=h.trgY)?m:0,h.trgWidth,h.trgHeight),i=c.toDataURL("image/png"),d.emit("thumbnail",a,i),null!=b?b():void 0},e.src=c.result)}}(this),c.readAsDataURL(a)},b.prototype.processQueue=function(){var a,b,c,d;if(b=this.options.parallelUploads,c=this.getUploadingFiles().length,a=c,!(c>=b)&&(d=this.getQueuedFiles(),d.length>0)){if(this.options.uploadMultiple)return this.processFiles(d.slice(0,b-c));for(;b>a;){if(!d.length)return;this.processFile(d.shift()),a++}}},b.prototype.processFile=function(a){return this.processFiles([a])},b.prototype.processFiles=function(a){var c,d,e;for(d=0,e=a.length;e>d;d++)c=a[d],c.processing=!0,c.status=b.UPLOADING,this.emit("processing",c);return this.options.uploadMultiple&&this.emit("processingmultiple",a),this.uploadFiles(a)},b.prototype._getFilesWithXhr=function(a){var b,c;return c=function(){var c,d,e,f;for(e=this.files,f=[],c=0,d=e.length;d>c;c++)b=e[c],b.xhr===a&&f.push(b);return f}.call(this)},b.prototype.cancelUpload=function(a){var c,d,e,f,g,h,i;if(a.status===b.UPLOADING){for(d=this._getFilesWithXhr(a.xhr),e=0,g=d.length;g>e;e++)c=d[e],c.status=b.CANCELED;for(a.xhr.abort(),f=0,h=d.length;h>f;f++)c=d[f],this.emit("canceled",c);this.options.uploadMultiple&&this.emit("canceledmultiple",d)}else((i=a.status)===b.ADDED||i===b.QUEUED)&&(a.status=b.CANCELED,this.emit("canceled",a),this.options.uploadMultiple&&this.emit("canceledmultiple",[a]));return this.options.autoProcessQueue?this.processQueue():void 0},e=function(){var a,b;return b=arguments[0],a=2<=arguments.length?j.call(arguments,1):[],"function"==typeof b?b.apply(this,a):b},b.prototype.uploadFile=function(a){return this.uploadFiles([a])},b.prototype.uploadFiles=function(a){var c,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,A,B,C,D,E,F,G,H,I,J,K,L;for(w=new XMLHttpRequest,x=0,B=a.length;B>x;x++)c=a[x],c.xhr=w;p=e(this.options.method,a),u=e(this.options.url,a),w.open(p,u,!0),w.withCredentials=!!this.options.withCredentials,s=null,g=function(b){return function(){var d,e,f;for(f=[],d=0,e=a.length;e>d;d++)c=a[d],f.push(b._errorProcessing(a,s||b.options.dictResponseError.replace("{{statusCode}}",w.status),w));return f}}(this),t=function(b){return function(d){var e,f,g,h,i,j,k,l,m;if(null!=d)for(f=100*d.loaded/d.total,g=0,j=a.length;j>g;g++)c=a[g],c.upload={progress:f,total:d.total,bytesSent:d.loaded};else{for(e=!0,f=100,h=0,k=a.length;k>h;h++)c=a[h],(100!==c.upload.progress||c.upload.bytesSent!==c.upload.total)&&(e=!1),c.upload.progress=f,c.upload.bytesSent=c.upload.total;if(e)return}for(m=[],i=0,l=a.length;l>i;i++)c=a[i],m.push(b.emit("uploadprogress",c,f,c.upload.bytesSent));return m}}(this),w.onload=function(c){return function(d){var e;if(a[0].status!==b.CANCELED&&4===w.readyState){if(s=w.responseText,w.getResponseHeader("content-type")&&~w.getResponseHeader("content-type").indexOf("application/json"))try{s=JSON.parse(s)}catch(f){d=f,s="Invalid JSON response from server."}return t(),200<=(e=w.status)&&300>e?c._finished(a,s,d):g()}}}(this),w.onerror=function(){return function(){return a[0].status!==b.CANCELED?g():void 0}}(this),r=null!=(G=w.upload)?G:w,r.onprogress=t,j={Accept:"application/json","Cache-Control":"no-cache","X-Requested-With":"XMLHttpRequest"},this.options.headers&&d(j,this.options.headers);for(h in j)i=j[h],w.setRequestHeader(h,i);if(f=new FormData,this.options.params){H=this.options.params;for(o in H)v=H[o],f.append(o,v)}for(y=0,C=a.length;C>y;y++)c=a[y],this.emit("sending",c,w,f);if(this.options.uploadMultiple&&this.emit("sendingmultiple",a,w,f),"FORM"===this.element.tagName)for(I=this.element.querySelectorAll("input, textarea, select, button"),z=0,D=I.length;D>z;z++)if(l=I[z],m=l.getAttribute("name"),n=l.getAttribute("type"),"SELECT"===l.tagName&&l.hasAttribute("multiple"))for(J=l.options,A=0,E=J.length;E>A;A++)q=J[A],q.selected&&f.append(m,q.value);else(!n||"checkbox"!==(K=n.toLowerCase())&&"radio"!==K||l.checked)&&f.append(m,l.value);for(k=F=0,L=a.length-1;L>=0?L>=F:F>=L;k=L>=0?++F:--F)f.append(this._getParamName(k),a[k],a[k].name);return w.send(f)},b.prototype._finished=function(a,c,d){var e,f,g;for(f=0,g=a.length;g>f;f++)e=a[f],e.status=b.SUCCESS,this.emit("success",e,c,d),this.emit("complete",e);return this.options.uploadMultiple&&(this.emit("successmultiple",a,c,d),this.emit("completemultiple",a)),this.options.autoProcessQueue?this.processQueue():void 0},b.prototype._errorProcessing=function(a,c,d){var e,f,g;for(f=0,g=a.length;g>f;f++)e=a[f],e.status=b.ERROR,this.emit("error",e,c,d),this.emit("complete",e);return this.options.uploadMultiple&&(this.emit("errormultiple",a,c,d),this.emit("completemultiple",a)),this.options.autoProcessQueue?this.processQueue():void 0},b}(c),a.version="3.12.0",a.options={},a.optionsForElement=function(b){return b.getAttribute("id")?a.options[d(b.getAttribute("id"))]:void 0},a.instances=[],a.forElement=function(a){if("string"==typeof a&&(a=document.querySelector(a)),null==(null!=a?a.dropzone:void 0))throw new Error("No Dropzone found for given element. This is probably because you're trying to access it before Dropzone had the time to initialize. Use the `init` option to setup any additional observers on your Dropzone.");return a.dropzone},a.autoDiscover=!0,a.discover=function(){var b,c,d,e,f,g;for(document.querySelectorAll?d=document.querySelectorAll(".dropzone"):(d=[],b=function(a){var b,c,e,f;for(f=[],c=0,e=a.length;e>c;c++)b=a[c],f.push(/(^| )dropzone($| )/.test(b.className)?d.push(b):void 0);return f},b(document.getElementsByTagName("div")),b(document.getElementsByTagName("form"))),g=[],e=0,f=d.length;f>e;e++)c=d[e],g.push(a.optionsForElement(c)!==!1?new a(c):void 0);return g},a.blacklistedBrowsers=[/opera.*Macintosh.*version\/12/i],a.isBrowserSupported=function(){var b,c,d,e,f;if(b=!0,window.File&&window.FileReader&&window.FileList&&window.Blob&&window.FormData&&document.querySelector)if("classList"in document.createElement("a"))for(f=a.blacklistedBrowsers,d=0,e=f.length;e>d;d++)c=f[d],c.test(navigator.userAgent)&&(b=!1);else b=!1;else b=!1;return b},i=function(a,b){var c,d,e,f;for(f=[],d=0,e=a.length;e>d;d++)c=a[d],c!==b&&f.push(c);return f},d=function(a){return a.replace(/[\-_](\w)/g,function(a){return a.charAt(1).toUpperCase()})},a.createElement=function(a){var b;return b=document.createElement("div"),b.innerHTML=a,b.childNodes[0]},a.elementInside=function(a,b){if(a===b)return!0;for(;a=a.parentNode;)if(a===b)return!0;return!1},a.getElement=function(a,b){var c;if("string"==typeof a?c=document.querySelector(a):null!=a.nodeType&&(c=a),null==c)throw new Error("Invalid `"+b+"` option provided. Please provide a CSS selector or a plain HTML element.");return c},a.getElements=function(a,b){var c,d,e,f,g,h,i,j;if(a instanceof Array){e=[];try{for(f=0,h=a.length;h>f;f++)d=a[f],e.push(this.getElement(d,b))}catch(k){c=k,e=null}}else if("string"==typeof a)for(e=[],j=document.querySelectorAll(a),g=0,i=j.length;i>g;g++)d=j[g],e.push(d);else null!=a.nodeType&&(e=[a]);if(null==e||!e.length)throw new Error("Invalid `"+b+"` option provided. Please provide a CSS selector, a plain HTML element or a list of those.");return e},a.confirm=function(a,b,c){return window.confirm(a)?b():null!=c?c():void 0},a.isValidFile=function(a,b){var c,d,e,f,g;if(!b)return!0;for(b=b.split(","),d=a.type,c=d.replace(/\/.*$/,""),f=0,g=b.length;g>f;f++)if(e=b[f],e=e.trim(),"."===e.charAt(0)){if(-1!==a.name.toLowerCase().indexOf(e.toLowerCase(),a.name.length-e.length))return!0}else if(/\/\*$/.test(e)){if(c===e.replace(/\/.*$/,""))return!0}else if(d===e)return!0;return!1},"undefined"!=typeof jQuery&&null!==jQuery&&(jQuery.fn.dropzone=function(b){return this.each(function(){return new a(this,b)})}),"undefined"!=typeof b&&null!==b?b.exports=a:window.Dropzone=a,a.ADDED="added",a.QUEUED="queued",a.ACCEPTED=a.QUEUED,a.UPLOADING="uploading",a.PROCESSING=a.UPLOADING,a.CANCELED="canceled",a.ERROR="error",a.SUCCESS="success",f=function(a){var b,c,d,e,f,g,h,i,j,k;for(h=a.naturalWidth,g=a.naturalHeight,c=document.createElement("canvas"),c.width=1,c.height=g,d=c.getContext("2d"),d.drawImage(a,0,0),e=d.getImageData(0,0,1,g).data,k=0,f=g,i=g;i>k;)b=e[4*(i-1)+3],0===b?f=i:k=i,i=f+k>>1;return j=i/g,0===j?1:j},g=function(a,b,c,d,e,g,h,i,j,k){var l;return l=f(b),a.drawImage(b,c,d,e,g,h,i,j,k/l)},e=function(a,b){var c,d,e,f,g,h,i,j,k;if(e=!1,k=!0,d=a.document,j=d.documentElement,c=d.addEventListener?"addEventListener":"attachEvent",i=d.addEventListener?"removeEventListener":"detachEvent",h=d.addEventListener?"":"on",f=function(c){return"readystatechange"!==c.type||"complete"===d.readyState?(("load"===c.type?a:d)[i](h+c.type,f,!1),!e&&(e=!0)?b.call(a,c.type||c):void 0):void 0},g=function(){var a;try{j.doScroll("left")}catch(b){return a=b,void setTimeout(g,50)}return f("poll")},"complete"!==d.readyState){if(d.createEventObject&&j.doScroll){try{k=!a.frameElement}catch(l){}k&&g()}return d[c](h+"DOMContentLoaded",f,!1),d[c](h+"readystatechange",f,!1),a[c](h+"load",f,!1)}},a._autoDiscoverFunction=function(){return a.autoDiscover?a.discover():void 0},e(window,a._autoDiscoverFunction)}).call(this)}),"object"==typeof exports?module.exports=a("dropzone"):"function"==typeof define&&define.amd?define([],function(){return a("dropzone")}):this.Dropzone=a("dropzone")}();;/*!

 * Lazy Load - jQuery plugin for lazy loading images

 *

 * Copyright (c) 2007-2015 Mika Tuupola

 *

 * Licensed under the MIT license:

 *   http://www.opensource.org/licenses/mit-license.php

 *

 * Project home:

 *   http://www.appelsiini.net/projects/lazyload

 *

 * Version:  1.9.5

 *

 */ 



(function($, window, document, undefined) {

    var $window = $(window);

 

    $.fn.lazyload = function(options) {

        var elements = this;

        var $container;

        var settings = {

            threshold       : 0,

            failure_limit   : 0,

            event           : "scroll",

            effect          : "show",

            container       : window,

            data_attribute  : "original",

            skip_invisible  : false,

            appear          : null,

            load            : null,

            placeholder     : "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"

        };



        function update() {

            var counter = 0;



            elements.each(function() {

                var $this = $(this);

                if (settings.skip_invisible && !$this.is(":visible")) {

                    return;

                }

                if ($.abovethetop(this, settings) ||

                    $.leftofbegin(this, settings)) {

                        /* Nothing. */

                } else if (!$.belowthefold(this, settings) &&

                    !$.rightoffold(this, settings)) {

                        $this.trigger("appear");

                        /* if we found an image we'll load, reset the counter */

                        counter = 0;

                } else {

                    if (++counter > settings.failure_limit) {

                        return false;

                    }

                }

            });



        }



        if(options) {

            /* Maintain BC for a couple of versions. */

            if (undefined !== options.failurelimit) {

                options.failure_limit = options.failurelimit;

                delete options.failurelimit;

            }

            if (undefined !== options.effectspeed) {

                options.effect_speed = options.effectspeed;

                delete options.effectspeed;

            }



            $.extend(settings, options);

        }



        /* Cache container as jQuery as object. */

        $container = (settings.container === undefined ||

                      settings.container === window) ? $window : $(settings.container);



        /* Fire one scroll event per scroll. Not one scroll event per image. */

        if (0 === settings.event.indexOf("scroll")) {

            $container.bind(settings.event, function() {

                return update();

            });

        }



        this.each(function() {

            var self = this;

            var $self = $(self);



            self.loaded = false;



            /* If no src attribute given use data:uri. */

            if ($self.attr("src") === undefined || $self.attr("src") === false) {

                if ($self.is("img")) {

                    $self.attr("src", settings.placeholder);

                }

            }



            /* When appear is triggered load original image. */

            $self.one("appear", function() {

                if (!this.loaded) {

                    if (settings.appear) {

                        var elements_left = elements.length;

                        settings.appear.call(self, elements_left, settings);

                    }

                    $("<img />")

                        .bind("load", function() {



                            var original = $self.attr("data-" + settings.data_attribute);

                            $self.hide();

                            if ($self.is("img")) {

                                $self.attr("src", original);

                            } else {

                                $self.css("background-image", "url('" + original + "')");

                            }

                            $self[settings.effect](settings.effect_speed);



                            self.loaded = true;



                            /* Remove image from array so it is not looped next time. */

                            var temp = $.grep(elements, function(element) {

                                return !element.loaded;

                            });

                            elements = $(temp);



                            if (settings.load) {

                                var elements_left = elements.length;

                                settings.load.call(self, elements_left, settings);

                            }

                        })

                        .attr("src", $self.attr("data-" + settings.data_attribute));

                }

            });



            /* When wanted event is triggered load original image */

            /* by triggering appear.                              */

            if (0 !== settings.event.indexOf("scroll")) {

                $self.bind(settings.event, function() {

                    if (!self.loaded) {

                        $self.trigger("appear");

                    }

                });

            }

        });



        /* Check if something appears when window is resized. */

        $window.bind("resize", function() {

            update();

        });



        /* With IOS5 force loading images when navigating with back button. */

        /* Non optimal workaround. */

        if ((/(?:iphone|ipod|ipad).*os 5/gi).test(navigator.appVersion)) {

            $window.bind("pageshow", function(event) {

                if (event.originalEvent && event.originalEvent.persisted) {

                    elements.each(function() {

                        $(this).trigger("appear");

                    });

                }

            });

        }



        /* Force initial check if images should appear. */

        $(document).ready(function() {

            update();

        });



        return this;

    };



    /* Convenience methods in jQuery namespace.           */

    /* Use as  $.belowthefold(element, {threshold : 100, container : window}) */



    $.belowthefold = function(element, settings) {

        var fold;



        if (settings.container === undefined || settings.container === window) {

            fold = (window.innerHeight ? window.innerHeight : $window.height()) + $window.scrollTop();

        } else {

            fold = $(settings.container).offset().top + $(settings.container).height();

        }



        return fold <= $(element).offset().top - settings.threshold;

    };



    $.rightoffold = function(element, settings) {

        var fold;



        if (settings.container === undefined || settings.container === window) {

            fold = $window.width() + $window.scrollLeft();

        } else {

            fold = $(settings.container).offset().left + $(settings.container).width();

        }



        return fold <= $(element).offset().left - settings.threshold;

    };



    $.abovethetop = function(element, settings) {

        var fold;



        if (settings.container === undefined || settings.container === window) {

            fold = $window.scrollTop();

        } else {

            fold = $(settings.container).offset().top;

        }



        return fold >= $(element).offset().top + settings.threshold  + $(element).height();

    };



    $.leftofbegin = function(element, settings) {

        var fold;



        if (settings.container === undefined || settings.container === window) {

            fold = $window.scrollLeft();

        } else {

            fold = $(settings.container).offset().left;

        }



        return fold >= $(element).offset().left + settings.threshold + $(element).width();

    };



    $.inviewport = function(element, settings) {

         return !$.rightoffold(element, settings) && !$.leftofbegin(element, settings) &&

                !$.belowthefold(element, settings) && !$.abovethetop(element, settings);

     };



    /* Custom selectors for your convenience.   */

    /* Use as $("img:below-the-fold").something() or */

    /* $("img").filter(":below-the-fold").something() which is faster */



    $.extend($.expr[":"], {

        "below-the-fold" : function(a) { return $.belowthefold(a, {threshold : 0}); },

        "above-the-top"  : function(a) { return !$.belowthefold(a, {threshold : 0}); },

        "right-of-screen": function(a) { return $.rightoffold(a, {threshold : 0}); },

        "left-of-screen" : function(a) { return !$.rightoffold(a, {threshold : 0}); },

        "in-viewport"    : function(a) { return $.inviewport(a, {threshold : 0}); },

        /* Maintain BC for couple of versions. */

        "above-the-fold" : function(a) { return !$.belowthefold(a, {threshold : 0}); },

        "right-of-fold"  : function(a) { return $.rightoffold(a, {threshold : 0}); },

        "left-of-fold"   : function(a) { return !$.rightoffold(a, {threshold : 0}); }

    });



})(jQuery, window, document);;/*!

 * jQuery Migrate - v1.2.1 - 2013-05-08

 * https://github.com/jquery/jquery-migrate

 * Copyright 2005, 2013 jQuery Foundation, Inc. and other contributors; Licensed MIT

 */

(function( jQuery, window, undefined ) {

// See http://bugs.jquery.com/ticket/13335

// "use strict";





var warnedAbout = {};



// List of warnings already given; public read only

jQuery.migrateWarnings = [];



// Set to true to prevent console output; migrateWarnings still maintained

// jQuery.migrateMute = false;

 

// Show a message on the console so devs know we're active

if ( !jQuery.migrateMute && window.console && window.console.log ) {

	window.console.log("JQMIGRATE: Logging is active");

}



// Set to false to disable traces that appear with warnings

if ( jQuery.migrateTrace === undefined ) {

	jQuery.migrateTrace = true;

}



// Forget any warnings we've already given; public

jQuery.migrateReset = function() {

	warnedAbout = {};

	jQuery.migrateWarnings.length = 0;

};



function migrateWarn( msg) {

	var console = window.console;

	if ( !warnedAbout[ msg ] ) {

		warnedAbout[ msg ] = true;

		jQuery.migrateWarnings.push( msg );

		if ( console && console.warn && !jQuery.migrateMute ) {

			console.warn( "JQMIGRATE: " + msg );

			if ( jQuery.migrateTrace && console.trace ) {

				console.trace();

			}

		}

	}

}



function migrateWarnProp( obj, prop, value, msg ) {

	if ( Object.defineProperty ) {

		// On ES5 browsers (non-oldIE), warn if the code tries to get prop;

		// allow property to be overwritten in case some other plugin wants it

		try {

			Object.defineProperty( obj, prop, {

				configurable: true,

				enumerable: true,

				get: function() {

					migrateWarn( msg );

					return value;

				},

				set: function( newValue ) {

					migrateWarn( msg );

					value = newValue;

				}

			});

			return;

		} catch( err ) {

			// IE8 is a dope about Object.defineProperty, can't warn there

		}

	}



	// Non-ES5 (or broken) browser; just set the property

	jQuery._definePropertyBroken = true;

	obj[ prop ] = value;

}



if ( document.compatMode === "BackCompat" ) {

	// jQuery has never supported or tested Quirks Mode

	migrateWarn( "jQuery is not compatible with Quirks Mode" );

}





var attrFn = jQuery( "<input/>", { size: 1 } ).attr("size") && jQuery.attrFn,

	oldAttr = jQuery.attr,

	valueAttrGet = jQuery.attrHooks.value && jQuery.attrHooks.value.get ||

		function() { return null; },

	valueAttrSet = jQuery.attrHooks.value && jQuery.attrHooks.value.set ||

		function() { return undefined; },

	rnoType = /^(?:input|button)$/i,

	rnoAttrNodeType = /^[238]$/,

	rboolean = /^(?:autofocus|autoplay|async|checked|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped|selected)$/i,

	ruseDefault = /^(?:checked|selected)$/i;



// jQuery.attrFn

migrateWarnProp( jQuery, "attrFn", attrFn || {}, "jQuery.attrFn is deprecated" );



jQuery.attr = function( elem, name, value, pass ) {

	var lowerName = name.toLowerCase(),

		nType = elem && elem.nodeType;



	if ( pass ) {

		// Since pass is used internally, we only warn for new jQuery

		// versions where there isn't a pass arg in the formal params

		if ( oldAttr.length < 4 ) {

			migrateWarn("jQuery.fn.attr( props, pass ) is deprecated");

		}

		if ( elem && !rnoAttrNodeType.test( nType ) &&

			(attrFn ? name in attrFn : jQuery.isFunction(jQuery.fn[name])) ) {

			return jQuery( elem )[ name ]( value );

		}

	}



	// Warn if user tries to set `type`, since it breaks on IE 6/7/8; by checking

	// for disconnected elements we don't warn on $( "<button>", { type: "button" } ).

	if ( name === "type" && value !== undefined && rnoType.test( elem.nodeName ) && elem.parentNode ) {

		migrateWarn("Can't change the 'type' of an input or button in IE 6/7/8");

	}



	// Restore boolHook for boolean property/attribute synchronization

	if ( !jQuery.attrHooks[ lowerName ] && rboolean.test( lowerName ) ) {

		jQuery.attrHooks[ lowerName ] = {

			get: function( elem, name ) {

				// Align boolean attributes with corresponding properties

				// Fall back to attribute presence where some booleans are not supported

				var attrNode,

					property = jQuery.prop( elem, name );

				return property === true || typeof property !== "boolean" &&

					( attrNode = elem.getAttributeNode(name) ) && attrNode.nodeValue !== false ?



					name.toLowerCase() :

					undefined;

			},

			set: function( elem, value, name ) {

				var propName;

				if ( value === false ) {

					// Remove boolean attributes when set to false

					jQuery.removeAttr( elem, name );

				} else {

					// value is true since we know at this point it's type boolean and not false

					// Set boolean attributes to the same name and set the DOM property

					propName = jQuery.propFix[ name ] || name;

					if ( propName in elem ) {

						// Only set the IDL specifically if it already exists on the element

						elem[ propName ] = true;

					}



					elem.setAttribute( name, name.toLowerCase() );

				}

				return name;

			}

		};



		// Warn only for attributes that can remain distinct from their properties post-1.9

		if ( ruseDefault.test( lowerName ) ) {

			migrateWarn( "jQuery.fn.attr('" + lowerName + "') may use property instead of attribute" );

		}

	}



	return oldAttr.call( jQuery, elem, name, value );

};



// attrHooks: value

jQuery.attrHooks.value = {

	get: function( elem, name ) {

		var nodeName = ( elem.nodeName || "" ).toLowerCase();

		if ( nodeName === "button" ) {

			return valueAttrGet.apply( this, arguments );

		}

		if ( nodeName !== "input" && nodeName !== "option" ) {

			migrateWarn("jQuery.fn.attr('value') no longer gets properties");

		}

		return name in elem ?

			elem.value :

			null;

	},

	set: function( elem, value ) {

		var nodeName = ( elem.nodeName || "" ).toLowerCase();

		if ( nodeName === "button" ) {

			return valueAttrSet.apply( this, arguments );

		}

		if ( nodeName !== "input" && nodeName !== "option" ) {

			migrateWarn("jQuery.fn.attr('value', val) no longer sets properties");

		}

		// Does not return so that setAttribute is also used

		elem.value = value;

	}

};





var matched, browser,

	oldInit = jQuery.fn.init,

	oldParseJSON = jQuery.parseJSON,

	// Note: XSS check is done below after string is trimmed

	rquickExpr = /^([^<]*)(<[\w\W]+>)([^>]*)$/;



// $(html) "looks like html" rule change

jQuery.fn.init = function( selector, context, rootjQuery ) {

	var match;



	if ( selector && typeof selector === "string" && !jQuery.isPlainObject( context ) &&

			(match = rquickExpr.exec( jQuery.trim( selector ) )) && match[ 0 ] ) {

		// This is an HTML string according to the "old" rules; is it still?

		if ( selector.charAt( 0 ) !== "<" ) {

			migrateWarn("$(html) HTML strings must start with '<' character");

		}

		if ( match[ 3 ] ) {

			migrateWarn("$(html) HTML text after last tag is ignored");

		}

		// Consistently reject any HTML-like string starting with a hash (#9521)

		// Note that this may break jQuery 1.6.x code that otherwise would work.

		if ( match[ 0 ].charAt( 0 ) === "#" ) {

			migrateWarn("HTML string cannot start with a '#' character");

			jQuery.error("JQMIGRATE: Invalid selector string (XSS)");

		}

		// Now process using loose rules; let pre-1.8 play too

		if ( context && context.context ) {

			// jQuery object as context; parseHTML expects a DOM object

			context = context.context;

		}

		if ( jQuery.parseHTML ) {

			return oldInit.call( this, jQuery.parseHTML( match[ 2 ], context, true ),

					context, rootjQuery );

		}

	}

	return oldInit.apply( this, arguments );

};

jQuery.fn.init.prototype = jQuery.fn;



// Let $.parseJSON(falsy_value) return null

jQuery.parseJSON = function( json ) {

	if ( !json && json !== null ) {

		migrateWarn("jQuery.parseJSON requires a valid JSON string");

		return null;

	}

	return oldParseJSON.apply( this, arguments );

};



jQuery.uaMatch = function( ua ) {

	ua = ua.toLowerCase();



	var match = /(chrome)[ \/]([\w.]+)/.exec( ua ) ||

		/(webkit)[ \/]([\w.]+)/.exec( ua ) ||

		/(opera)(?:.*version|)[ \/]([\w.]+)/.exec( ua ) ||

		/(msie) ([\w.]+)/.exec( ua ) ||

		ua.indexOf("compatible") < 0 && /(mozilla)(?:.*? rv:([\w.]+)|)/.exec( ua ) ||

		[];



	return {

		browser: match[ 1 ] || "",

		version: match[ 2 ] || "0"

	};

};



// Don't clobber any existing jQuery.browser in case it's different

if ( !jQuery.browser ) {

	matched = jQuery.uaMatch( navigator.userAgent );

	browser = {};



	if ( matched.browser ) {

		browser[ matched.browser ] = true;

		browser.version = matched.version;

	}



	// Chrome is Webkit, but Webkit is also Safari.

	if ( browser.chrome ) {

		browser.webkit = true;

	} else if ( browser.webkit ) {

		browser.safari = true;

	}



	jQuery.browser = browser;

}



// Warn if the code tries to get jQuery.browser

migrateWarnProp( jQuery, "browser", jQuery.browser, "jQuery.browser is deprecated" );



jQuery.sub = function() {

	function jQuerySub( selector, context ) {

		return new jQuerySub.fn.init( selector, context );

	}

	jQuery.extend( true, jQuerySub, this );

	jQuerySub.superclass = this;

	jQuerySub.fn = jQuerySub.prototype = this();

	jQuerySub.fn.constructor = jQuerySub;

	jQuerySub.sub = this.sub;

	jQuerySub.fn.init = function init( selector, context ) {

		if ( context && context instanceof jQuery && !(context instanceof jQuerySub) ) {

			context = jQuerySub( context );

		}



		return jQuery.fn.init.call( this, selector, context, rootjQuerySub );

	};

	jQuerySub.fn.init.prototype = jQuerySub.fn;

	var rootjQuerySub = jQuerySub(document);

	migrateWarn( "jQuery.sub() is deprecated" );

	return jQuerySub;

};





// Ensure that $.ajax gets the new parseJSON defined in core.js

jQuery.ajaxSetup({

	converters: {

		"text json": jQuery.parseJSON

	}

});





var oldFnData = jQuery.fn.data;



jQuery.fn.data = function( name ) {

	var ret, evt,

		elem = this[0];



	// Handles 1.7 which has this behavior and 1.8 which doesn't

	if ( elem && name === "events" && arguments.length === 1 ) {

		ret = jQuery.data( elem, name );

		evt = jQuery._data( elem, name );

		if ( ( ret === undefined || ret === evt ) && evt !== undefined ) {

			migrateWarn("Use of jQuery.fn.data('events') is deprecated");

			return evt;

		}

	}

	return oldFnData.apply( this, arguments );

};





var rscriptType = /\/(java|ecma)script/i,

	oldSelf = jQuery.fn.andSelf || jQuery.fn.addBack;



jQuery.fn.andSelf = function() {

	migrateWarn("jQuery.fn.andSelf() replaced by jQuery.fn.addBack()");

	return oldSelf.apply( this, arguments );

};



// Since jQuery.clean is used internally on older versions, we only shim if it's missing

if ( !jQuery.clean ) {

	jQuery.clean = function( elems, context, fragment, scripts ) {

		// Set context per 1.8 logic

		context = context || document;

		context = !context.nodeType && context[0] || context;

		context = context.ownerDocument || context;



		migrateWarn("jQuery.clean() is deprecated");



		var i, elem, handleScript, jsTags,

			ret = [];



		jQuery.merge( ret, jQuery.buildFragment( elems, context ).childNodes );



		// Complex logic lifted directly from jQuery 1.8

		if ( fragment ) {

			// Special handling of each script element

			handleScript = function( elem ) {

				// Check if we consider it executable

				if ( !elem.type || rscriptType.test( elem.type ) ) {

					// Detach the script and store it in the scripts array (if provided) or the fragment

					// Return truthy to indicate that it has been handled

					return scripts ?

						scripts.push( elem.parentNode ? elem.parentNode.removeChild( elem ) : elem ) :

						fragment.appendChild( elem );

				}

			};



			for ( i = 0; (elem = ret[i]) != null; i++ ) {

				// Check if we're done after handling an executable script

				if ( !( jQuery.nodeName( elem, "script" ) && handleScript( elem ) ) ) {

					// Append to fragment and handle embedded scripts

					fragment.appendChild( elem );

					if ( typeof elem.getElementsByTagName !== "undefined" ) {

						// handleScript alters the DOM, so use jQuery.merge to ensure snapshot iteration

						jsTags = jQuery.grep( jQuery.merge( [], elem.getElementsByTagName("script") ), handleScript );



						// Splice the scripts into ret after their former ancestor and advance our index beyond them

						ret.splice.apply( ret, [i + 1, 0].concat( jsTags ) );

						i += jsTags.length;

					}

				}

			}

		}



		return ret;

	};

}



var eventAdd = jQuery.event.add,

	eventRemove = jQuery.event.remove,

	eventTrigger = jQuery.event.trigger,

	oldToggle = jQuery.fn.toggle,

	oldLive = jQuery.fn.live,

	oldDie = jQuery.fn.die,

	ajaxEvents = "ajaxStart|ajaxStop|ajaxSend|ajaxComplete|ajaxError|ajaxSuccess",

	rajaxEvent = new RegExp( "\\b(?:" + ajaxEvents + ")\\b" ),

	rhoverHack = /(?:^|\s)hover(\.\S+|)\b/,

	hoverHack = function( events ) {

		if ( typeof( events ) !== "string" || jQuery.event.special.hover ) {

			return events;

		}

		if ( rhoverHack.test( events ) ) {

			migrateWarn("'hover' pseudo-event is deprecated, use 'mouseenter mouseleave'");

		}

		return events && events.replace( rhoverHack, "mouseenter$1 mouseleave$1" );

	};



// Event props removed in 1.9, put them back if needed; no practical way to warn them

if ( jQuery.event.props && jQuery.event.props[ 0 ] !== "attrChange" ) {

	jQuery.event.props.unshift( "attrChange", "attrName", "relatedNode", "srcElement" );

}



// Undocumented jQuery.event.handle was "deprecated" in jQuery 1.7

if ( jQuery.event.dispatch ) {

	migrateWarnProp( jQuery.event, "handle", jQuery.event.dispatch, "jQuery.event.handle is undocumented and deprecated" );

}



// Support for 'hover' pseudo-event and ajax event warnings

jQuery.event.add = function( elem, types, handler, data, selector ){

	if ( elem !== document && rajaxEvent.test( types ) ) {

		migrateWarn( "AJAX events should be attached to document: " + types );

	}

	eventAdd.call( this, elem, hoverHack( types || "" ), handler, data, selector );

};

jQuery.event.remove = function( elem, types, handler, selector, mappedTypes ){

	eventRemove.call( this, elem, hoverHack( types ) || "", handler, selector, mappedTypes );

};



jQuery.fn.error = function() {

	var args = Array.prototype.slice.call( arguments, 0);

	migrateWarn("jQuery.fn.error() is deprecated");

	args.splice( 0, 0, "error" );

	if ( arguments.length ) {

		return this.bind.apply( this, args );

	}

	// error event should not bubble to window, although it does pre-1.7

	this.triggerHandler.apply( this, args );

	return this;

};



jQuery.fn.toggle = function( fn, fn2 ) {



	// Don't mess with animation or css toggles

	if ( !jQuery.isFunction( fn ) || !jQuery.isFunction( fn2 ) ) {

		return oldToggle.apply( this, arguments );

	}

	migrateWarn("jQuery.fn.toggle(handler, handler...) is deprecated");



	// Save reference to arguments for access in closure

	var args = arguments,

		guid = fn.guid || jQuery.guid++,

		i = 0,

		toggler = function( event ) {

			// Figure out which function to execute

			var lastToggle = ( jQuery._data( this, "lastToggle" + fn.guid ) || 0 ) % i;

			jQuery._data( this, "lastToggle" + fn.guid, lastToggle + 1 );



			// Make sure that clicks stop

			event.preventDefault();



			// and execute the function

			return args[ lastToggle ].apply( this, arguments ) || false;

		};



	// link all the functions, so any of them can unbind this click handler

	toggler.guid = guid;

	while ( i < args.length ) {

		args[ i++ ].guid = guid;

	}



	return this.click( toggler );

};



jQuery.fn.live = function( types, data, fn ) {

	migrateWarn("jQuery.fn.live() is deprecated");

	if ( oldLive ) {

		return oldLive.apply( this, arguments );

	}

	jQuery( this.context ).on( types, this.selector, data, fn );

	return this;

};



jQuery.fn.die = function( types, fn ) {

	migrateWarn("jQuery.fn.die() is deprecated");

	if ( oldDie ) {

		return oldDie.apply( this, arguments );

	}

	jQuery( this.context ).off( types, this.selector || "**", fn );

	return this;

};



// Turn global events into document-triggered events

jQuery.event.trigger = function( event, data, elem, onlyHandlers  ){

	if ( !elem && !rajaxEvent.test( event ) ) {

		migrateWarn( "Global events are undocumented and deprecated" );

	}

	return eventTrigger.call( this,  event, data, elem || document, onlyHandlers  );

};

jQuery.each( ajaxEvents.split("|"),

	function( _, name ) {

		jQuery.event.special[ name ] = {

			setup: function() {

				var elem = this;



				// The document needs no shimming; must be !== for oldIE

				if ( elem !== document ) {

					jQuery.event.add( document, name + "." + jQuery.guid, function() {

						jQuery.event.trigger( name, null, elem, true );

					});

					jQuery._data( this, name, jQuery.guid++ );

				}

				return false;

			},

			teardown: function() {

				if ( this !== document ) {

					jQuery.event.remove( document, name + "." + jQuery._data( this, name ) );

				}

				return false;

			}

		};

	}

);





})( jQuery, window );;/*

 * 

 * TableSorter 2.0 - Client-side table sorting with ease!

 * Version 2.0.5b

 * @requires jQuery v1.2.3

 * 

 * Copyright (c) 2007 Christian Bach

 * Examples and docs at: http://tablesorter.com

 * Dual licensed under the MIT and GPL licenses:

 * http://www.opensource.org/licenses/mit-license.php

 * http://www.gnu.org/licenses/gpl.html

 * 

 */

/**

 * 

 * @description Create a sortable table with multi-column sorting capabilitys

 * 

 * @example $('table').tablesorter();

 * @desc Create a simple tablesorter interface.

 * 

 * @example $('table').tablesorter({ sortList:[[0,0],[1,0]] });

 * @desc Create a tablesorter interface and sort on the first and secound column column headers.

 * 

 * @example $('table').tablesorter({ headers: { 0: { sorter: false}, 1: {sorter: false} } });

 *          

 * @desc Create a tablesorter interface and disableing the first and second  column headers.

 *      

 * 

 * @example $('table').tablesorter({ headers: { 0: {sorter:"integer"}, 1: {sorter:"currency"} } });

 * 

 * @desc Create a tablesorter interface and set a column parser for the first

 *       and second column.

 * 

 * 

 * @param Object

 *            settings An object literal containing key/value pairs to provide

 *            optional settings.

 * 

 * 

 * @option String cssHeader (optional) A string of the class name to be appended

 *         to sortable tr elements in the thead of the table. Default value:

 *         "header"

 * 

 * @option String cssAsc (optional) A string of the class name to be appended to

 *         sortable tr elements in the thead on a ascending sort. Default value:

 *         "headerSortUp"

 * 

 * @option String cssDesc (optional) A string of the class name to be appended

 *         to sortable tr elements in the thead on a descending sort. Default

 *         value: "headerSortDown"

 * 

 * @option String sortInitialOrder (optional) A string of the inital sorting

 *         order can be asc or desc. Default value: "asc"

 * 

 * @option String sortMultisortKey (optional) A string of the multi-column sort

 *         key. Default value: "shiftKey"

 * 

 * @option String textExtraction (optional) A string of the text-extraction

 *         method to use. For complex html structures inside td cell set this

 *         option to "complex", on large tables the complex option can be slow.

 *         Default value: "simple"

 * 

 * @option Object headers (optional) An array containing the forces sorting

 *         rules. This option let's you specify a default sorting rule. Default

 *         value: null

 * 

 * @option Array sortList (optional) An array containing the forces sorting

 *         rules. This option let's you specify a default sorting rule. Default

 *         value: null

 * 

 * @option Array sortForce (optional) An array containing forced sorting rules.

 *         This option let's you specify a default sorting rule, which is

 *         prepended to user-selected rules. Default value: null

 * 

 * @option Boolean sortLocaleCompare (optional) Boolean flag indicating whatever

 *         to use String.localeCampare method or not. Default set to true.

 * 

 * 

 * @option Array sortAppend (optional) An array containing forced sorting rules.

 *         This option let's you specify a default sorting rule, which is

 *         appended to user-selected rules. Default value: null

 * 

 * @option Boolean widthFixed (optional) Boolean flag indicating if tablesorter

 *         should apply fixed widths to the table columns. This is usefull when

 *         using the pager companion plugin. This options requires the dimension

 *         jquery plugin. Default value: false

 * 

 * @option Boolean cancelSelection (optional) Boolean flag indicating if

 *         tablesorter should cancel selection of the table headers text.

 *         Default value: true

 * 

 * @option Boolean debug (optional) Boolean flag indicating if tablesorter

 *         should display debuging information usefull for development.

 * 

 * @type jQuery

 * 

 * @name tablesorter

 * 

 * @cat Plugins/Tablesorter

 * 

 * @author Christian Bach/christian.bach@polyester.se

 */



$(function()

{

    // Fix DateTime issue

    $.tablesorter.addParser({

        id: "ddmmyy",

        is: function(s) {

            return false;

        },

        format: function(s, table, cell, cellIndex) {

            var c = table.config, ci = c.headerList[cellIndex],

            x = s;

            s = s

                // replace separators

                .replace(/\s+/g," ").replace(/[\-|\.|\,]/g, "/")

                // reformat dd/mm/yy to mm/dd/yy

                .replace(/(\d{1,2})[\/\s](\d{1,2})[\/\s](\d{2})/, "$2/$1/$3");

            return $.tablesorter.formatFloat( (new Date(s).getTime() || ''), table);

        },

        type: "numeric"

    });

    // End Fix DateTime issue

});    

 

(function ($) {

    $.extend({

        tablesorter: new

        function () {



            var parsers = [],

                widgets = [];



            this.defaults = {

                cssHeader: "header",

                cssAsc: "headerSortUp",

                cssDesc: "headerSortDown",

                cssChildRow: "expand-child",

                sortInitialOrder: "asc",

                sortMultiSortKey: "shiftKey",

                sortForce: null,

                sortAppend: null,

                sortLocaleCompare: true,

                textExtraction: "simple",

                parsers: {}, widgets: [],

                widgetZebra: {

                    css: ["even", "odd"]

                }, headers: {}, widthFixed: false,

                cancelSelection: true,

                sortList: [],

                headerList: [],

                dateFormat: "us",

                decimal: '/\.|\,/g',

                onRenderHeader: null,

                selectorHeaders: 'thead .order-by-column',

                debug: false

            };



            /* debuging utils */



            function benchmark(s, d) {

                log(s + "," + (new Date().getTime() - d.getTime()) + "ms");

            }



            this.benchmark = benchmark;



            function log(s) {

                if (typeof console != "undefined" && typeof console.debug != "undefined") {

                    console.log(s);

                } else {

                    alert(s);

                }

            }



            /* parsers utils */



            function buildParserCache(table, $headers) {



                if (table.config.debug) {

                    var parsersDebug = "";

                }



                if (table.tBodies.length == 0) return; // In the case of empty tables

                var rows = table.tBodies[0].rows;



                if (rows[0]) {



                    var list = [],

                        cells = rows[0].cells,

                        l = cells.length;



                    for (var i = 0; i < l; i++) {



                        var p = false;



                        if ($.metadata && ($($headers[i]).metadata() && $($headers[i]).metadata().sorter)) {



                            p = getParserById($($headers[i]).metadata().sorter);



                        } else if ((table.config.headers[i] && table.config.headers[i].sorter)) {



                            p = getParserById(table.config.headers[i].sorter);

                        }

                        if (!p) {



                            p = detectParserForColumn(table, rows, -1, i);

                        }



                        if (table.config.debug) {

                            parsersDebug += "column:" + i + " parser:" + p.id + "\n";

                        }



                        list.push(p);

                    }

                }



                if (table.config.debug) {

                    log(parsersDebug);

                }



                return list;

            };



            function detectParserForColumn(table, rows, rowIndex, cellIndex) {

                var l = parsers.length,

                    node = false,

                    nodeValue = false,

                    keepLooking = true;

                while (nodeValue == '' && keepLooking) {

                    rowIndex++;

                    if (rows[rowIndex]) {

                        node = getNodeFromRowAndCellIndex(rows, rowIndex, cellIndex);

                        nodeValue = trimAndGetNodeText(table.config, node);

                        if (table.config.debug) {

                            log('Checking if value was empty on row:' + rowIndex);

                        }

                    } else {

                        keepLooking = false;

                    }

                }

                for (var i = 1; i < l; i++) {

                    if (parsers[i].is(nodeValue, table, node)) {

                        return parsers[i];

                    }

                }

                // 0 is always the generic parser (text)

                return parsers[0];

            }



            function getNodeFromRowAndCellIndex(rows, rowIndex, cellIndex) {

                return rows[rowIndex].cells[cellIndex];

            }



            function trimAndGetNodeText(config, node) {

                return $.trim(getElementText(config, node));

            }



            function getParserById(name) {

                var l = parsers.length;

                for (var i = 0; i < l; i++) {

                    if (parsers[i].id.toLowerCase() == name.toLowerCase()) {

                        return parsers[i];

                    }

                }

                return false;

            }



            /* utils */



            function buildCache(table) {



                if (table.config.debug) {

                    var cacheTime = new Date();

                }



                var totalRows = (table.tBodies[0] && table.tBodies[0].rows.length) || 0,

                    totalCells = (table.tBodies[0].rows[0] && table.tBodies[0].rows[0].cells.length) || 0,

                    parsers = table.config.parsers,

                    cache = {

                        row: [],

                        normalized: []

                    };



                for (var i = 0; i < totalRows; ++i) {



                    /** Add the table data to main data array */

                    var c = $(table.tBodies[0].rows[i]),

                        cols = [];



                    // if this is a child row, add it to the last row's children and

                    // continue to the next row

                    if (c.hasClass(table.config.cssChildRow)) {

                        cache.row[cache.row.length - 1] = cache.row[cache.row.length - 1].add(c);

                        // go to the next for loop

                        continue;

                    }



                    cache.row.push(c);



                    for (var j = 0; j < totalCells; ++j) {

                        cols.push(parsers[j].format(getElementText(table.config, c[0].cells[j]), table, c[0].cells[j]));

                    }



                    cols.push(cache.normalized.length); // add position for rowCache

                    cache.normalized.push(cols);

                    cols = null;

                };



                if (table.config.debug) {

                    benchmark("Building cache for " + totalRows + " rows:", cacheTime);

                }



                return cache;

            };



            function getElementText(config, node) {



                var text = "";



                if (!node) return "";



                if (!config.supportsTextContent) config.supportsTextContent = node.textContent || false;



                if (config.textExtraction == "simple") {

                    if (config.supportsTextContent) {

                        text = node.textContent;

                    } else {

                        if (node.childNodes[0] && node.childNodes[0].hasChildNodes()) {

                            text = node.childNodes[0].innerHTML;

                        } else {

                            text = node.innerHTML;

                        }

                    }

                } else {

                    if (typeof(config.textExtraction) == "function") {

                        text = config.textExtraction(node);

                    } else {

                        text = $(node).text();

                    }

                }

                return text;

            }



            function appendToTable(table, cache) {



                if (table.config.debug) {

                    var appendTime = new Date()

                }



                var c = cache,

                    r = c.row,

                    n = c.normalized,

                    totalRows = n.length,

                    checkCell = (n[0].length - 1),

                    tableBody = $(table.tBodies[0]),

                    rows = [];





                for (var i = 0; i < totalRows; i++) {

                    var pos = n[i][checkCell];



                    rows.push(r[pos]);



                    if (!table.config.appender) {



                        //var o = ;

                        var l = r[pos].length;

                        for (var j = 0; j < l; j++) {

                            tableBody[0].appendChild(r[pos][j]);

                        }



                        // 

                    }

                }







                if (table.config.appender) {



                    table.config.appender(table, rows);

                }



                rows = null;



                if (table.config.debug) {

                    benchmark("Rebuilt table:", appendTime);

                }



                // apply table widgets

                applyWidget(table);



                // trigger sortend

                setTimeout(function () {

                    $(table).trigger("sortEnd");

                }, 0);



            };



            function buildHeaders(table) {



                if (table.config.debug) {

                    var time = new Date();

                }



                var meta = ($.metadata) ? true : false;

                

                var header_index = computeTableHeaderCellIndexes(table);



                $tableHeaders = $(table.config.selectorHeaders, table).each(function (index) {



                    this.column = header_index[this.parentNode.rowIndex + "-" + this.cellIndex];

                    // this.column = index;

                    this.order = formatSortingOrder(table.config.sortInitialOrder);

                    

                    

                    this.count = this.order;



                    if (checkHeaderMetadata(this) || checkHeaderOptions(table, index)) this.sortDisabled = true;

                    if (checkHeaderOptionsSortingLocked(table, index)) this.order = this.lockedOrder = checkHeaderOptionsSortingLocked(table, index);



                    if (!this.sortDisabled) {

                        var $th = $(this).addClass(table.config.cssHeader);

                        if (table.config.onRenderHeader) table.config.onRenderHeader.apply($th);

                    }



                    // add cell to headerList

                    table.config.headerList[index] = this;

                });



                if (table.config.debug) {

                    benchmark("Built headers:", time);

                    log($tableHeaders);

                }



                return $tableHeaders;



            };



            // from:

            // http://www.javascripttoolbox.com/lib/table/examples.php

            // http://www.javascripttoolbox.com/temp/table_cellindex.html





            function computeTableHeaderCellIndexes(t) {

                var matrix = [];

                var lookup = {};

                var thead = t.getElementsByTagName('THEAD')[0];

                var trs = thead.getElementsByTagName('TR');



                for (var i = 0; i < trs.length; i++) {

                    var cells = trs[i].cells;

                    for (var j = 0; j < cells.length; j++) {

                        var c = cells[j];



                        var rowIndex = c.parentNode.rowIndex;

                        var cellId = rowIndex + "-" + c.cellIndex;

                        var rowSpan = c.rowSpan || 1;

                        var colSpan = c.colSpan || 1

                        var firstAvailCol;

                        if (typeof(matrix[rowIndex]) == "undefined") {

                            matrix[rowIndex] = [];

                        }

                        // Find first available column in the first row

                        for (var k = 0; k < matrix[rowIndex].length + 1; k++) {

                            if (typeof(matrix[rowIndex][k]) == "undefined") {

                                firstAvailCol = k;

                                break;

                            }

                        }

                        lookup[cellId] = firstAvailCol;

                        for (var k = rowIndex; k < rowIndex + rowSpan; k++) {

                            if (typeof(matrix[k]) == "undefined") {

                                matrix[k] = [];

                            }

                            var matrixrow = matrix[k];

                            for (var l = firstAvailCol; l < firstAvailCol + colSpan; l++) {

                                matrixrow[l] = "x";

                            }

                        }

                    }

                }

                return lookup;

            }



            function checkCellColSpan(table, rows, row) {

                var arr = [],

                    r = table.tHead.rows,

                    c = r[row].cells;



                for (var i = 0; i < c.length; i++) {

                    var cell = c[i];



                    if (cell.colSpan > 1) {

                        arr = arr.concat(checkCellColSpan(table, headerArr, row++));

                    } else {

                        if (table.tHead.length == 1 || (cell.rowSpan > 1 || !r[row + 1])) {

                            arr.push(cell);

                        }

                        // headerArr[row] = (i+row);

                    }

                }

                return arr;

            };



            function checkHeaderMetadata(cell) {

                if (($.metadata) && ($(cell).metadata().sorter === false)) {

                    return true;

                };

                return false;

            }



            function checkHeaderOptions(table, i) {

                if ((table.config.headers[i]) && (table.config.headers[i].sorter === false)) {

                    return true;

                };

                return false;

            }

            

             function checkHeaderOptionsSortingLocked(table, i) {

                if ((table.config.headers[i]) && (table.config.headers[i].lockedOrder)) return table.config.headers[i].lockedOrder;

                return false;

            }

            

            function applyWidget(table) {

                var c = table.config.widgets;

                var l = c.length;

                for (var i = 0; i < l; i++) {



                    getWidgetById(c[i]).format(table);

                }



            }



            function getWidgetById(name) {

                var l = widgets.length;

                for (var i = 0; i < l; i++) {

                    if (widgets[i].id.toLowerCase() == name.toLowerCase()) {

                        return widgets[i];

                    }

                }

            };



            function formatSortingOrder(v) {

                if (typeof(v) != "Number") {

                    return (v.toLowerCase() == "desc") ? 1 : 0;

                } else {

                    return (v == 1) ? 1 : 0;

                }

            }



            function isValueInArray(v, a) {

                var l = a.length;

                for (var i = 0; i < l; i++) {

                    if (a[i][0] == v) {

                        return true;

                    }

                }

                return false;

            }



            function setHeadersCss(table, $headers, list, css) {

                // remove all header information

                $headers.removeClass(css[0]).removeClass(css[1]);



                var h = [];

                $headers.each(function (offset) {

                    if (!this.sortDisabled) {

                        h[this.column] = $(this);

                    }

                });



                var l = list.length;

                for (var i = 0; i < l; i++) {

                    h[list[i][0]].addClass(css[list[i][1]]);

                }

            }



            function fixColumnWidth(table, $headers) {

                var c = table.config;

                if (c.widthFixed) {

                    var colgroup = $('<colgroup>');

                    $("tr:first td", table.tBodies[0]).each(function () {

                        colgroup.append($('<col>').css('width', $(this).width()));

                    });

                    $(table).prepend(colgroup);

                };

            }



            function updateHeaderSortCount(table, sortList) {

                var c = table.config,

                    l = sortList.length;

                for (var i = 0; i < l; i++) {

                    var s = sortList[i],

                        o = c.headerList[s[0]];

                    o.count = s[1];

                    o.count++;

                }

            }



            /* sorting methods */



            function multisort(table, sortList, cache) {



                if (table.config.debug) {

                    var sortTime = new Date();

                }



                var dynamicExp = "var sortWrapper = function(a,b) {",

                    l = sortList.length;



                // TODO: inline functions.

                for (var i = 0; i < l; i++) {



                    var c = sortList[i][0];

                    var order = sortList[i][1];

                    // var s = (getCachedSortType(table.config.parsers,c) == "text") ?

                    // ((order == 0) ? "sortText" : "sortTextDesc") : ((order == 0) ?

                    // "sortNumeric" : "sortNumericDesc");

                    // var s = (table.config.parsers[c].type == "text") ? ((order == 0)

                    // ? makeSortText(c) : makeSortTextDesc(c)) : ((order == 0) ?

                    // makeSortNumeric(c) : makeSortNumericDesc(c));

                    var s = (table.config.parsers[c].type == "text") ? ((order == 0) ? makeSortFunction("text", "asc", c) : makeSortFunction("text", "desc", c)) : ((order == 0) ? makeSortFunction("numeric", "asc", c) : makeSortFunction("numeric", "desc", c));

                    var e = "e" + i;



                    dynamicExp += "var " + e + " = " + s; // + "(a[" + c + "],b[" + c

                    // + "]); ";

                    dynamicExp += "if(" + e + ") { return " + e + "; } ";

                    dynamicExp += "else { ";



                }



                // if value is the same keep orignal order

                var orgOrderCol = cache.normalized[0].length - 1;

                dynamicExp += "return a[" + orgOrderCol + "]-b[" + orgOrderCol + "];";



                for (var i = 0; i < l; i++) {

                    dynamicExp += "}; ";

                }



                dynamicExp += "return 0; ";

                dynamicExp += "}; ";



                if (table.config.debug) {

                    benchmark("Evaling expression:" + dynamicExp, new Date());

                }



                eval(dynamicExp);



                cache.normalized.sort(sortWrapper);



                if (table.config.debug) {

                    benchmark("Sorting on " + sortList.toString() + " and dir " + order + " time:", sortTime);

                }



                return cache;

            };



            function makeSortFunction(type, direction, index) {

                var a = "a[" + index + "]",

                    b = "b[" + index + "]";

                if (type == 'text' && direction == 'asc') {

                    return "(" + a + " == " + b + " ? 0 : (" + a + " === null ? Number.POSITIVE_INFINITY : (" + b + " === null ? Number.NEGATIVE_INFINITY : (" + a + " < " + b + ") ? -1 : 1 )));";

                } else if (type == 'text' && direction == 'desc') {

                    return "(" + a + " == " + b + " ? 0 : (" + a + " === null ? Number.POSITIVE_INFINITY : (" + b + " === null ? Number.NEGATIVE_INFINITY : (" + b + " < " + a + ") ? -1 : 1 )));";

                } else if (type == 'numeric' && direction == 'asc') {

                    return "(" + a + " === null && " + b + " === null) ? 0 :(" + a + " === null ? Number.POSITIVE_INFINITY : (" + b + " === null ? Number.NEGATIVE_INFINITY : " + a + " - " + b + "));";

                } else if (type == 'numeric' && direction == 'desc') {

                    return "(" + a + " === null && " + b + " === null) ? 0 :(" + a + " === null ? Number.POSITIVE_INFINITY : (" + b + " === null ? Number.NEGATIVE_INFINITY : " + b + " - " + a + "));";

                }

            };



            function makeSortText(i) {

                return "((a[" + i + "] < b[" + i + "]) ? -1 : ((a[" + i + "] > b[" + i + "]) ? 1 : 0));";

            };



            function makeSortTextDesc(i) {

                return "((b[" + i + "] < a[" + i + "]) ? -1 : ((b[" + i + "] > a[" + i + "]) ? 1 : 0));";

            };



            function makeSortNumeric(i) {

                return "a[" + i + "]-b[" + i + "];";

            };



            function makeSortNumericDesc(i) {

                return "b[" + i + "]-a[" + i + "];";

            };



            function sortText(a, b) {

                if (table.config.sortLocaleCompare) return a.localeCompare(b);

                return ((a < b) ? -1 : ((a > b) ? 1 : 0));

            };



            function sortTextDesc(a, b) {

                if (table.config.sortLocaleCompare) return b.localeCompare(a);

                return ((b < a) ? -1 : ((b > a) ? 1 : 0));

            };



            function sortNumeric(a, b) {

                return a - b;

            };



            function sortNumericDesc(a, b) {

                return b - a;

            };



            function getCachedSortType(parsers, i) {

                return parsers[i].type;

            }; /* public methods */

            this.construct = function (settings) {

                return this.each(function () {

                    // if no thead or tbody quit.

                    if (!this.tHead || !this.tBodies) return;

                    // declare

                    var $this, $document, $headers, cache, config, shiftDown = 0,

                        sortOrder;

                    // new blank config object

                    this.config = {};

                    // merge and extend.

                    config = $.extend(this.config, $.tablesorter.defaults, settings);

                    // store common expression for speed

                    $this = $(this);

                    // save the settings where they read

                    $.data(this, "tablesorter", config);

                    // build headers

                    $headers = buildHeaders(this);

                    // try to auto detect column type, and store in tables config

                    this.config.parsers = buildParserCache(this, $headers);

                    // build the cache for the tbody cells

                    cache = buildCache(this);

                    // get the css class names, could be done else where.

                    var sortCSS = [config.cssDesc, config.cssAsc];

                    // fixate columns if the users supplies the fixedWidth option

                    fixColumnWidth(this);

                    // apply event handling to headers

                    // this is to big, perhaps break it out?

                    $headers.click(



                    function (e) {

                        var totalRows = ($this[0].tBodies[0] && $this[0].tBodies[0].rows.length) || 0;

                        if (!this.sortDisabled && totalRows > 0) {

                            // Only call sortStart if sorting is

                            // enabled.

                            $this.trigger("sortStart");

                            // store exp, for speed

                            var $cell = $(this);

                            // get current column index

                            var i = this.column;

                            // get current column sort order

                            this.order = this.count++ % 2;

                            // always sort on the locked order.

                            if(this.lockedOrder) this.order = this.lockedOrder;

                            

                            // user only whants to sort on one

                            // column

                            if (!e[config.sortMultiSortKey]) {

                                // flush the sort list

                                config.sortList = [];

                                if (config.sortForce != null) {

                                    var a = config.sortForce;

                                    for (var j = 0; j < a.length; j++) {

                                        if (a[j][0] != i) {

                                            config.sortList.push(a[j]);

                                        }

                                    }

                                }

                                // add column to sort list

                                config.sortList.push([i, this.order]);

                                // multi column sorting

                            } else {

                                // the user has clicked on an all

                                // ready sortet column.

                                if (isValueInArray(i, config.sortList)) {

                                    // revers the sorting direction

                                    // for all tables.

                                    for (var j = 0; j < config.sortList.length; j++) {

                                        var s = config.sortList[j],

                                            o = config.headerList[s[0]];

                                        if (s[0] == i) {

                                            o.count = s[1];

                                            o.count++;

                                            s[1] = o.count % 2;

                                        }

                                    }

                                } else {

                                    // add column to sort list array

                                    config.sortList.push([i, this.order]);

                                }

                            };

                            setTimeout(function () {

                                // set css for headers

                                setHeadersCss($this[0], $headers, config.sortList, sortCSS);

                                appendToTable(

                                    $this[0], multisort(

                                    $this[0], config.sortList, cache)

                                );

                            }, 1);

                            // stop normal event by returning false

                            return false;

                        }

                        // cancel selection

                    }).mousedown(function () {

                        if (config.cancelSelection) {

                            this.onselectstart = function () {

                                return false

                            };

                            return false;

                        }

                    });

                    // apply easy methods that trigger binded events

                    $this.bind("update", function () {

                        var me = this;

                        setTimeout(function () {

                            // rebuild parsers.

                            me.config.parsers = buildParserCache(

                            me, $headers);

                            // rebuild the cache map

                            cache = buildCache(me);

                        }, 1);

                    }).bind("updateCell", function (e, cell) {

                        var config = this.config;

                        // get position from the dom.

                        var pos = [(cell.parentNode.rowIndex - 1), cell.cellIndex];

                        // update cache

                        cache.normalized[pos[0]][pos[1]] = config.parsers[pos[1]].format(

                        getElementText(config, cell), cell);

                    }).bind("sorton", function (e, list) {

                        $(this).trigger("sortStart");

                        config.sortList = list;

                        // update and store the sortlist

                        var sortList = config.sortList;

                        // update header count index

                        updateHeaderSortCount(this, sortList);

                        // set css for headers

                        setHeadersCss(this, $headers, sortList, sortCSS);

                        // sort the table and append it to the dom

                        appendToTable(this, multisort(this, sortList, cache));

                    }).bind("appendCache", function () {

                        appendToTable(this, cache);

                    }).bind("applyWidgetId", function (e, id) {

                        getWidgetById(id).format(this);

                    }).bind("applyWidgets", function () {

                        // apply widgets

                        applyWidget(this);

                    });

                    if ($.metadata && ($(this).metadata() && $(this).metadata().sortlist)) {

                        config.sortList = $(this).metadata().sortlist;

                    }

                    // if user has supplied a sort list to constructor.

                    if (config.sortList.length > 0) {

                        $this.trigger("sorton", [config.sortList]);

                    }

                    // apply widgets

                    applyWidget(this);

                });

            };

            this.addParser = function (parser) {

                var l = parsers.length,

                    a = true;

                for (var i = 0; i < l; i++) {

                    if (parsers[i].id.toLowerCase() == parser.id.toLowerCase()) {

                        a = false;

                    }

                }

                if (a) {

                    parsers.push(parser);

                };

            };

            this.addWidget = function (widget) {

                widgets.push(widget);

            };

            this.formatFloat = function (s) {

                var i = parseFloat(s);

                return (isNaN(i)) ? 0 : i;

            };

            this.formatInt = function (s) {

                var i = parseInt(s);

                return (isNaN(i)) ? 0 : i;

            };

            this.isDigit = function (s, config) {

                // replace all an wanted chars and match.

                return /^[-+]?\d*$/.test($.trim(s.replace(/[,.']/g, '')));

            };

            this.clearTableBody = function (table) {

                if ($.browser.msie) {

                    function empty() {

                        while (this.firstChild)

                        this.removeChild(this.firstChild);

                    }

                    empty.apply(table.tBodies[0]);

                } else {

                    table.tBodies[0].innerHTML = "";

                }

            };

        }

    });



    // extend plugin scope

    $.fn.extend({

        tablesorter: $.tablesorter.construct

    });



    // make shortcut

    var ts = $.tablesorter;



    // add default parsers

    ts.addParser({

        id: "text",

        is: function (s) {

            return true;

        }, format: function (s) {

            return $.trim(s.toLocaleLowerCase());

        }, type: "text"

    });



    ts.addParser({

        id: "digit",

        is: function (s, table) {

            var c = table.config;

            return $.tablesorter.isDigit(s, c);

        }, format: function (s) {

            return $.tablesorter.formatFloat(s);

        }, type: "numeric"

    });



    ts.addParser({

        id: "currency",

        is: function (s) {

            return /^[£$€?.]/.test(s);

        }, format: function (s) {

            return $.tablesorter.formatFloat(s.replace(new RegExp(/[£$€]/g), ""));

        }, type: "numeric"

    });



    ts.addParser({

        id: "ipAddress",

        is: function (s) {

            return /^\d{2,3}[\.]\d{2,3}[\.]\d{2,3}[\.]\d{2,3}$/.test(s);

        }, format: function (s) {

            var a = s.split("."),

                r = "",

                l = a.length;

            for (var i = 0; i < l; i++) {

                var item = a[i];

                if (item.length == 2) {

                    r += "0" + item;

                } else {

                    r += item;

                }

            }

            return $.tablesorter.formatFloat(r);

        }, type: "numeric"

    });



    ts.addParser({

        id: "url",

        is: function (s) {

            return /^(https?|ftp|file):\/\/$/.test(s);

        }, format: function (s) {

            return jQuery.trim(s.replace(new RegExp(/(https?|ftp|file):\/\//), ''));

        }, type: "text"

    });



    ts.addParser({

        id: "isoDate",

        is: function (s) {

            return /^\d{4}[\/-]\d{1,2}[\/-]\d{1,2}$/.test(s);

        }, format: function (s) {

            return $.tablesorter.formatFloat((s != "") ? new Date(s.replace(

            new RegExp(/-/g), "/")).getTime() : "0");

        }, type: "numeric"

    });



    ts.addParser({

        id: "percent",

        is: function (s) {

            return /\%$/.test($.trim(s));

        }, format: function (s) {

            return $.tablesorter.formatFloat(s.replace(new RegExp(/%/g), ""));

        }, type: "numeric"

    });



    ts.addParser({

        id: "usLongDate",

        is: function (s) {

            return s.match(new RegExp(/^[A-Za-z]{3,10}\.? [0-9]{1,2}, ([0-9]{4}|'?[0-9]{2}) (([0-2]?[0-9]:[0-5][0-9])|([0-1]?[0-9]:[0-5][0-9]\s(AM|PM)))$/));

        }, format: function (s) {

            return $.tablesorter.formatFloat(new Date(s).getTime());

        }, type: "numeric"

    });



    ts.addParser({

        id: "shortDate",

        is: function (s) {

            return /\d{1,2}[\/\-]\d{1,2}[\/\-]\d{2,4}/.test(s);

        }, format: function (s, table) {

            var c = table.config;

            s = s.replace(/\-/g, "/");

            if (c.dateFormat == "us") {

                // reformat the string in ISO format

                s = s.replace(/(\d{1,2})[\/\-](\d{1,2})[\/\-](\d{4})/, "$3/$1/$2");

            } else if (c.dateFormat == "uk") {

                // reformat the string in ISO format

                s = s.replace(/(\d{1,2})[\/\-](\d{1,2})[\/\-](\d{4})/, "$3/$2/$1");

            } else if (c.dateFormat == "dd/mm/yy" || c.dateFormat == "dd-mm-yy") {

                s = s.replace(/(\d{1,2})[\/\-](\d{1,2})[\/\-](\d{2})/, "$1/$2/$3");

            }

            return $.tablesorter.formatFloat(new Date(s).getTime());

        }, type: "numeric"

    });

    ts.addParser({

        id: "time",

        is: function (s) {

            return /^(([0-2]?[0-9]:[0-5][0-9])|([0-1]?[0-9]:[0-5][0-9]\s(am|pm)))$/.test(s);

        }, format: function (s) {

            return $.tablesorter.formatFloat(new Date("2000/01/01 " + s).getTime());

        }, type: "numeric"

    });

    ts.addParser({

        id: "metadata",

        is: function (s) {

            return false;

        }, format: function (s, table, cell) {

            var c = table.config,

                p = (!c.parserMetadataName) ? 'sortValue' : c.parserMetadataName;

            return $(cell).metadata()[p];

        }, type: "numeric"

    });

    // add default widgets

    ts.addWidget({

        id: "zebra",

        format: function (table) {

            if (table.config.debug) {

                var time = new Date();

            }

            var $tr, row = -1,

                odd;

            // loop through the visible rows

            $("tr:visible", table.tBodies[0]).each(function (i) {

                $tr = $(this);

                // style children rows the same way the parent

                // row was styled

                if (!$tr.hasClass(table.config.cssChildRow)) row++;

                odd = (row % 2 == 0);

                $tr.removeClass(

                table.config.widgetZebra.css[odd ? 0 : 1]).addClass(

                table.config.widgetZebra.css[odd ? 1 : 0])

            });

            if (table.config.debug) {

                $.tablesorter.benchmark("Applying Zebra widget", time);

            }

        }

    });

})(jQuery);









;(function() {

  var MutationObserver, Util, WeakMap, getComputedStyle, getComputedStyleRX,

    __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; },

    __indexOf = [].indexOf || function(item) { for (var i = 0, l = this.length; i < l; i++) { if (i in this && this[i] === item) return i; } return -1; };



  Util = (function() {

    function Util() {}



    Util.prototype.extend = function(custom, defaults) {

      var key, value;

      for (key in defaults) {

        value = defaults[key];

        if (custom[key] == null) {

          custom[key] = value;

        }

      }

      return custom;

    };



    Util.prototype.isMobile = function(agent) {

      return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(agent);

    };



    Util.prototype.addEvent = function(elem, event, fn) {

      if (elem.addEventListener != null) {

        return elem.addEventListener(event, fn, false);

      } else if (elem.attachEvent != null) {

        return elem.attachEvent("on" + event, fn);

      } else {

        return elem[event] = fn;

      } 

    };



    Util.prototype.removeEvent = function(elem, event, fn) {

      if (elem.removeEventListener != null) {

        return elem.removeEventListener(event, fn, false);

      } else if (elem.detachEvent != null) {

        return elem.detachEvent("on" + event, fn);

      } else {

        return delete elem[event];

      }

    };



    Util.prototype.innerHeight = function() {

      if ('innerHeight' in window) {

        return window.innerHeight;

      } else {

        return document.documentElement.clientHeight;

      }

    };



    return Util;



  })();



  WeakMap = this.WeakMap || this.MozWeakMap || (WeakMap = (function() {

    function WeakMap() {

      this.keys = [];

      this.values = [];

    }



    WeakMap.prototype.get = function(key) {

      var i, item, _i, _len, _ref;

      _ref = this.keys;

      for (i = _i = 0, _len = _ref.length; _i < _len; i = ++_i) {

        item = _ref[i];

        if (item === key) {

          return this.values[i];

        }

      }

    };



    WeakMap.prototype.set = function(key, value) {

      var i, item, _i, _len, _ref;

      _ref = this.keys;

      for (i = _i = 0, _len = _ref.length; _i < _len; i = ++_i) {

        item = _ref[i];

        if (item === key) {

          this.values[i] = value;

          return;

        }

      }

      this.keys.push(key);

      return this.values.push(value);

    };



    return WeakMap;



  })());



  MutationObserver = this.MutationObserver || this.WebkitMutationObserver || this.MozMutationObserver || (MutationObserver = (function() {

    function MutationObserver() {

      if (typeof console !== "undefined" && console !== null) {

        console.warn('MutationObserver is not supported by your browser.');

      }

      if (typeof console !== "undefined" && console !== null) {

        console.warn('WOW.js cannot detect dom mutations, please call .sync() after loading new content.');

      }

    }



    MutationObserver.notSupported = true;



    MutationObserver.prototype.observe = function() {};



    return MutationObserver;



  })());



  getComputedStyle = this.getComputedStyle || function(el, pseudo) {

    this.getPropertyValue = function(prop) {

      var _ref;

      if (prop === 'float') {

        prop = 'styleFloat';

      }

      if (getComputedStyleRX.test(prop)) {

        prop.replace(getComputedStyleRX, function(_, _char) {

          return _char.toUpperCase();

        });

      }

      return ((_ref = el.currentStyle) != null ? _ref[prop] : void 0) || null;

    };

    return this;

  };



  getComputedStyleRX = /(\-([a-z]){1})/g;



  this.WOW = (function() {

    WOW.prototype.defaults = {

      boxClass: 'wow',

      animateClass: 'animated',

      offset: 0,

      mobile: true,

      live: true,

      callback: null

    };



    function WOW(options) {

      if (options == null) {

        options = {};

      }

      this.scrollCallback = __bind(this.scrollCallback, this);

      this.scrollHandler = __bind(this.scrollHandler, this);

      this.start = __bind(this.start, this);

      this.scrolled = true;

      this.config = this.util().extend(options, this.defaults);

      this.animationNameCache = new WeakMap();

    }



    WOW.prototype.init = function() {

      var _ref;

      this.element = window.document.documentElement;

      if ((_ref = document.readyState) === "interactive" || _ref === "complete") {

        this.start();

      } else {

        this.util().addEvent(document, 'DOMContentLoaded', this.start);

      }

      return this.finished = [];

    };



    WOW.prototype.start = function() {

      var box, _i, _len, _ref;

      this.stopped = false;

      this.boxes = (function() {

        var _i, _len, _ref, _results;

        _ref = this.element.querySelectorAll("." + this.config.boxClass);

        _results = [];

        for (_i = 0, _len = _ref.length; _i < _len; _i++) {

          box = _ref[_i];

          _results.push(box);

        }

        return _results;

      }).call(this);

      this.all = (function() {

        var _i, _len, _ref, _results;

        _ref = this.boxes;

        _results = [];

        for (_i = 0, _len = _ref.length; _i < _len; _i++) {

          box = _ref[_i];

          _results.push(box);

        }

        return _results;

      }).call(this);

      if (this.boxes.length) {

        if (this.disabled()) {

          this.resetStyle();

        } else {

          _ref = this.boxes;

          for (_i = 0, _len = _ref.length; _i < _len; _i++) {

            box = _ref[_i];

            this.applyStyle(box, true);

          }

        }

      }

      if (!this.disabled()) {

        this.util().addEvent(window, 'scroll', this.scrollHandler);

        this.util().addEvent(window, 'resize', this.scrollHandler);

        this.interval = setInterval(this.scrollCallback, 50);

      }

      if (this.config.live) {

        return new MutationObserver((function(_this) {

          return function(records) {

            var node, record, _j, _len1, _results;

            _results = [];

            for (_j = 0, _len1 = records.length; _j < _len1; _j++) {

              record = records[_j];

              _results.push((function() {

                var _k, _len2, _ref1, _results1;

                _ref1 = record.addedNodes || [];

                _results1 = [];

                for (_k = 0, _len2 = _ref1.length; _k < _len2; _k++) {

                  node = _ref1[_k];

                  _results1.push(this.doSync(node));

                }

                return _results1;

              }).call(_this));

            }

            return _results;

          };

        })(this)).observe(document.body, {

          childList: true,

          subtree: true

        });

      }

    };



    WOW.prototype.stop = function() {

      this.stopped = true;

      this.util().removeEvent(window, 'scroll', this.scrollHandler);

      this.util().removeEvent(window, 'resize', this.scrollHandler);

      if (this.interval != null) {

        return clearInterval(this.interval);

      }

    };



    WOW.prototype.sync = function(element) {

      if (MutationObserver.notSupported) {

        return this.doSync(this.element);

      }

    };



    WOW.prototype.doSync = function(element) {

      var box, _i, _len, _ref, _results;

      if (element == null) {

        element = this.element;

      }

      if (element.nodeType !== 1) {

        return;

      }

      element = element.parentNode || element;

      _ref = element.querySelectorAll("." + this.config.boxClass);

      _results = [];

      for (_i = 0, _len = _ref.length; _i < _len; _i++) {

        box = _ref[_i];

        if (__indexOf.call(this.all, box) < 0) {

          this.boxes.push(box);

          this.all.push(box);

          if (this.stopped || this.disabled()) {

            this.resetStyle();

          } else {

            this.applyStyle(box, true);

          }

          _results.push(this.scrolled = true);

        } else {

          _results.push(void 0);

        }

      }

      return _results;

    };



    WOW.prototype.show = function(box) {

      this.applyStyle(box);

      box.className = "" + box.className + " " + this.config.animateClass;

      if (this.config.callback != null) {

        return this.config.callback(box);

      }

    };



    WOW.prototype.applyStyle = function(box, hidden) {

      var delay, duration, iteration;

      duration = box.getAttribute('data-wow-duration');

      delay = box.getAttribute('data-wow-delay');

      iteration = box.getAttribute('data-wow-iteration');

      return this.animate((function(_this) {

        return function() {

          return _this.customStyle(box, hidden, duration, delay, iteration);

        };

      })(this));

    };



    WOW.prototype.animate = (function() {

      if ('requestAnimationFrame' in window) {

        return function(callback) {

          return window.requestAnimationFrame(callback);

        };

      } else {

        return function(callback) {

          return callback();

        };

      }

    })();



    WOW.prototype.resetStyle = function() {

      var box, _i, _len, _ref, _results;

      _ref = this.boxes;

      _results = [];

      for (_i = 0, _len = _ref.length; _i < _len; _i++) {

        box = _ref[_i];

        _results.push(box.style.visibility = 'visible');

      }

      return _results;

    };



    WOW.prototype.customStyle = function(box, hidden, duration, delay, iteration) {

      if (hidden) {

        this.cacheAnimationName(box);

      }

      box.style.visibility = hidden ? 'hidden' : 'visible';

      if (duration) {

        this.vendorSet(box.style, {

          animationDuration: duration

        });

      }

      if (delay) {

        this.vendorSet(box.style, {

          animationDelay: delay

        });

      }

      if (iteration) {

        this.vendorSet(box.style, {

          animationIterationCount: iteration

        });

      }

      this.vendorSet(box.style, {

        animationName: hidden ? 'none' : this.cachedAnimationName(box)

      });

      return box;

    };



    WOW.prototype.vendors = ["moz", "webkit"];



    WOW.prototype.vendorSet = function(elem, properties) {

      var name, value, vendor, _results;

      _results = [];

      for (name in properties) {

        value = properties[name];

        elem["" + name] = value;

        _results.push((function() {

          var _i, _len, _ref, _results1;

          _ref = this.vendors;

          _results1 = [];

          for (_i = 0, _len = _ref.length; _i < _len; _i++) {

            vendor = _ref[_i];

            _results1.push(elem["" + vendor + (name.charAt(0).toUpperCase()) + (name.substr(1))] = value);

          }

          return _results1;

        }).call(this));

      }

      return _results;

    };



    WOW.prototype.vendorCSS = function(elem, property) {

      var result, style, vendor, _i, _len, _ref;

      style = getComputedStyle(elem);

      result = style.getPropertyCSSValue(property);

      _ref = this.vendors;

      for (_i = 0, _len = _ref.length; _i < _len; _i++) {

        vendor = _ref[_i];

        result = result || style.getPropertyCSSValue("-" + vendor + "-" + property);

      }

      return result;

    };



    WOW.prototype.animationName = function(box) {

      var animationName;

      try {

        animationName = this.vendorCSS(box, 'animation-name').cssText;

      } catch (_error) {

        animationName = getComputedStyle(box).getPropertyValue('animation-name');

      }

      if (animationName === 'none') {

        return '';

      } else {

        return animationName;

      }

    };



    WOW.prototype.cacheAnimationName = function(box) {

      return this.animationNameCache.set(box, this.animationName(box));

    };



    WOW.prototype.cachedAnimationName = function(box) {

      return this.animationNameCache.get(box);

    };



    WOW.prototype.scrollHandler = function() {

      return this.scrolled = true;

    };



    WOW.prototype.scrollCallback = function() {

      var box;

      if (this.scrolled) {

        this.scrolled = false;

        this.boxes = (function() {

          var _i, _len, _ref, _results;

          _ref = this.boxes;

          _results = [];

          for (_i = 0, _len = _ref.length; _i < _len; _i++) {

            box = _ref[_i];

            if (!(box)) {

              continue;

            }

            if (this.isVisible(box)) {

              this.show(box);

              continue;

            }

            _results.push(box);

          }

          return _results;

        }).call(this);

        if (!(this.boxes.length || this.config.live)) {

          return this.stop();

        }

      }

    };



    WOW.prototype.offsetTop = function(element) {

      var top;

      while (element.offsetTop === void 0) {

        element = element.parentNode;

      }

      top = element.offsetTop;

      while (element = element.offsetParent) {

        top += element.offsetTop;

      } 

      return top;

    };



    WOW.prototype.isVisible = function(box) {

      var bottom, offset, top, viewBottom, viewTop;

      offset = box.getAttribute('data-wow-offset') || this.config.offset;

      viewTop = window.pageYOffset;

      viewBottom = viewTop + Math.min(this.element.clientHeight, this.util().innerHeight()) - offset;

      top = this.offsetTop(box);

      bottom = top + box.clientHeight;

      return top <= viewBottom && bottom >= viewTop;

    };



    WOW.prototype.util = function() {

      return this._util != null ? this._util : this._util = new Util();

    };



    WOW.prototype.disabled = function() {

      return !this.config.mobile && this.util().isMobile(navigator.userAgent);

    };



    return WOW;



  })();



}).call(this);;// WOW

new WOW().init();   



function isBreakpoint(alias) {

    return $('.device-' + alias).is(':visible');

}



// Backstretch

$(".sponsors").backstretch('/img/renaissance-sportive-forestoise-background-2.jpg');

$(".header").backstretch('/img/renaissance-sportive-forestoise-background.jpg');



// LazyLoad

$('img.lazy').lazyload({

    effect : 'fadeIn'

});



// Full Width Images & Video from TinyMce

function addFullWidthToImageAndVideo(selector) {



    $(selector).each(function() {



        if ($(this).attr('style') === undefined || $(this).attr('style') === false) {



            $(this).css({'width' : '100%'})

        };

     

    });

	

}

addFullWidthToImageAndVideo('iframe');

addFullWidthToImageAndVideo('img.lazy');



// Fix display checkbox in form

$('#appbundle_tournament_registration_add_tournamentRegistrationTeams').parent().removeClass('col-lg-6');

