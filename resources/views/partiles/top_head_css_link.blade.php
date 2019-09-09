<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{ asset('frontend/left_menu/mtree.css')}}" rel="stylesheet" type="text/css">
<title>Popy Bazar Laravel Project</title>
<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
<script src="{{ asset('frontend/js/jquery.min.js')}}"></script>
<link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('frontend/css_2/muhibullah.css')}}">
<link rel="stylesheet" href="{{ asset('frontend/css_2/muhibullah1.css')}}">
<link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet">
<!--language doc start-->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-112630491-1');
</script>
<style>
		#google_translate_element{width:300px;float:right;text-align:right;display:block}
		.goog-te-banner-frame.skiptranslate { display: none !important;} 
		body { top: 0px !important; }
		#goog-gt-tt{display: none !important; top: 0px !important; } 
		.goog-tooltip skiptranslate{display: none !important; top: 0px !important; } 
		.activity-root { display: hide !important;} 
		.status-message { display: hide !important;}
		.started-activity-container { display: hide !important;}
	</style>
<div id="google_translate_element" style="display: none"></div>
<script type="text/javascript">	

function googleTranslateElementInit() {
new google.translate.TranslateElement({ pageLanguage: 'en/bn', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false }, 'google_translate_element');
}
</script>
<script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
<script>
function translateLanguage(lang) {
var $frame = $('.goog-te-menu-frame:first');
if (!$frame.size()) {
alert("Error: Could not find Google translate frame.");
return false;
}
$frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
return false;
}
</script>
<!--language doc End-->
<style>
div.clear
{
    clear: both;
}

div.product-chooser{
    
}

    div.product-chooser.disabled div.product-chooser-item
	{
		zoom: 1;
		filter: alpha(opacity=60);
		opacity: 0.6;
		cursor: default;
	}

	div.product-chooser div.product-chooser-item{
		padding: 11px;
		border-radius: 6px;
		cursor: pointer;
		position: relative;
		border: 1px solid #c8c8c8;
		margin-bottom: 10px;
        margin-left: 0px;
        margin-right: 10x;
	}
	
	div.product-chooser div.product-chooser-item.selected{
		border: 1px solid #c8c8c8;
		background: #FFFFFF;
		padding: 10px;
		filter: alpha(opacity=100);
		opacity: 1;
	}
	
		div.product-chooser div.product-chooser-item img{
			padding: 0;
		}
		
		div.product-chooser div.product-chooser-item span.title{
			display: block;
			margin: 10px 0 5px 0;
			font-weight: bold;
			font-size: 14px;
		}
		
		div.product-chooser div.product-chooser-item span.description{
			font-size: 12px;
		}
		
		div.product-chooser div.product-chooser-item input{
			position: absolute;
			left: 0;
			top: 0;
			visibility:hidden;
		}
</style>
<script>
$(function(){
	$('div.product-chooser').not('.disabled').find('div.product-chooser-item').on('click', function(){
		$(this).parent().parent().find('div.product-chooser-item').removeClass('selected');
		$(this).addClass('selected');
		$(this).find('input[type="radio"]').prop("checked", true);
		
	});
});
</script>
<style>
.slider_sec			{background:#111111; text-align:center; color:#fff; font-family: 'Raleway', sans-serif; height:1000px;}
.slider_in			{padding: 10px 40px 80px 40px;}
.slider_sec h3		{margin:0px 0 45px 0; padding:10px 0 0 0; line-height:1; font-size:40px; color:#fff; font-weight:600;}
.slider_sec h4		{margin:0px; padding:0px 0 0 0; line-height:1; font-size:40px; color:#fff; font-weight:300;}
.img_wrp			{line-height:0px; background:#fff; padding:5px;}
.img_wrp img		{transition: all 0.5s ease;}
.owl-prev			{
position: absolute;z-index: 10;display: inline-block;  left: -79.7px; cursor: pointer; font-size: 0.1px; top: 30%; width: 95px; height: 100px;  background: transparent url(http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/image/array.PNG)no-repeat;}
.owl-next			{position: absolute; z-index: 10; display: inline-block; right: -78px;  cursor: pointer;font-size: 0.1px;  top: 25%; width: 45px;  height: 140px;  
background:transparent url(http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/image/next.PNG)no-repeat center;}
.img_text			{position:absolute; left:0; bottom:20px; opacity:0; z-index:10; transition: all 0.5s ease; width:100%; font-family: 'Raleway', sans-serif;}
.img_text h5		{font-size:23px;  font-weight:600; color:#fff; text-transform:uppercase; line-height:1; padding:0 0 4px 0px;}
.img_text p			{font-size:12px;  padding:0px 10px; font-weight:500; margin:0px; color:#fff; line-height:20px; font-family: 'Raleway', sans-serif; text-transform: capitalize;}
.img_wrp:hover img	{  filter: gray; -webkit-filter: grayscale(1); filter: grayscale(1); transition: all 0.5s ease;}
.img_wrp:hover .img_text{opacity:1; transition: all 0.5s ease;}
.img_bg				{position:absolute; left:0; top:0; width:100%; height:100%; background:rgba(0,0,0,0.7); opacity:0; z-index:1;}
.img_wrp:hover .img_bg{opacity:1;}


/*Owl carousel Library*/

.owl-carousel,
.owl-carousel .owl-item {
	-webkit-tap-highlight-color: transparent;
	position: relative
}

.owl-carousel .animated {
	-webkit-animation-duration: 1s;
	animation-duration: 1s;
	-webkit-animation-fill-mode: both;
	animation-fill-mode: both
}

.owl-carousel .owl-animated-in {
	z-index: 0
}

.owl-carousel .owl-animated-out {
	z-index: 1
}

.owl-carousel .fadeOut {
	-webkit-animation-name: fadeOut;
	animation-name: fadeOut
}

@-webkit-keyframes fadeOut {
	0% {
		opacity: 1
	}
	100% {
		opacity: 0
	}
}

@keyframes fadeOut {
	0% {
		opacity: 1
	}
	100% {
		opacity: 0
	}
}

.owl-height {
	-webkit-transition: height .5s ease-in-out;
	-moz-transition: height .5s ease-in-out;
	-ms-transition: height .5s ease-in-out;
	-o-transition: height .5s ease-in-out;
	transition: height .5s ease-in-out
}

.owl-carousel {
	display: none;
	width: 100%;
	z-index: 1
}

.owl-carousel .owl-stage {
	position: relative;
	-ms-touch-action: pan-Y
}

.owl-carousel .owl-stage:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0
}

.owl-carousel .owl-stage-outer {
	position: relative;
	overflow: hidden;
	-webkit-transform: translate3d(0, 0, 0)
}

.owl-carousel .owl-controls .owl-dot,
.owl-carousel .owl-controls .owl-nav .owl-next,
.owl-carousel .owl-controls .owl-nav .owl-prev {
	cursor: pointer;
	cursor: hand;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none
}

.owl-carousel.owl-loaded {
	display: block
}

.owl-carousel.owl-loading {
	opacity: 0;
	display: block
}

.owl-carousel.owl-hidden {
	opacity: 0
}

.owl-carousel .owl-refresh .owl-item {
	display: none
}

.owl-carousel .owl-item {
	min-height: 1px;
	float: left;
	-webkit-backface-visibility: hidden;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none
}

.owl-carousel .owl-item img {
	display: block;
	width: 100%;
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d
}

.owl-carousel.owl-text-select-on .owl-item {
	-webkit-user-select: auto;
	-moz-user-select: auto;
	-ms-user-select: auto;
	user-select: auto
}

.owl-carousel .owl-grab {
	cursor: move;
	cursor: -webkit-grab;
	cursor: -o-grab;
	cursor: -ms-grab;
	cursor: grab
}

.owl-carousel.owl-rtl {
	direction: rtl
}

.owl-carousel.owl-rtl .owl-item {
	float: right
}

.no-js .owl-carousel {
	display: block
}

.owl-carousel .owl-item .owl-lazy {
	opacity: 0;
	-webkit-transition: opacity .4s ease;
	-moz-transition: opacity .4s ease;
	-ms-transition: opacity .4s ease;
	-o-transition: opacity .4s ease;
	transition: opacity .4s ease
}

.owl-carousel .owl-video-wrapper {
	position: relative;
	height: 100%;
	background: #000
}

.owl-carousel .owl-video-play-icon {
	position: absolute;
	height: 80px;
	width: 80px;
	left: 50%;
	top: 50%;
	margin-left: -40px;
	margin-top: -40px;
	background: url(owl.video.play.png) no-repeat;
	cursor: pointer;
	z-index: 1;
	-webkit-backface-visibility: hidden;
	-webkit-transition: scale .1s ease;
	-moz-transition: scale .1s ease;
	-ms-transition: scale .1s ease;
	-o-transition: scale .1s ease;
	transition: scale .1s ease
}

.owl-carousel .owl-video-play-icon:hover {
	-webkit-transition: scale(1.3, 1.3);
	-moz-transition: scale(1.3, 1.3);
	-ms-transition: scale(1.3, 1.3);
	-o-transition: scale(1.3, 1.3);
	transition: scale(1.3, 1.3)
}

.owl-carousel .owl-video-playing .owl-video-play-icon,
.owl-carousel .owl-video-playing .owl-video-tn {
	display: none
}

.owl-carousel .owl-video-tn {
	opacity: 0;
	height: 100%;
	background-position: center center;
	background-repeat: no-repeat;
	-webkit-background-size: contain;
	-moz-background-size: contain;
	-o-background-size: contain;
	background-size: contain;
	-webkit-transition: opacity .4s ease;
	-moz-transition: opacity .4s ease;
	-ms-transition: opacity .4s ease;
	-o-transition: opacity .4s ease;
	transition: opacity .4s ease
}

.owl-carousel .owl-video-frame {
	position: relative;
	z-index: 1
}


@media only screen and (max-width: 500px) {


.owl-prev {
position: absolute;z-index: 10;display: inline-block;  left: -55px; cursor: pointer; font-size: 0.1px; top: 30%; width: 95px; height: 100px;  background: transparent url(http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/image/array.PNG)no-repeat;}
.owl-next {position: absolute; z-index: 10; display: inline-block; right: -57px;  cursor: pointer;font-size: 0.1px;  top: 25%; width: 45px;  height: 140px;  
background:transparent url(http://sundarbanbd.com/SAIFUL_DEMO/POPY_BAZAR/frontend/image/next.PNG)no-repeat center;}

}
</style>
<script>
 (function($,window,document,undefined){function Owl(element,options){this.settings=null;this.options=$.extend({},Owl.Defaults,options);this.$element=$(element);this._handlers={};this._plugins={};this._supress={};this._current=null;this._speed=null;this._coordinates=[];this._breakpoint=null;this._width=null;this._items=[];this._clones=[];this._mergers=[];this._widths=[];this._invalidated={};this._pipe=[];this._drag={time:null,target:null,pointer:null,stage:{start:null,current:null},direction:null};this._states={current:{},tags:{'initializing':['busy'],'animating':['busy'],'dragging':['interacting']}};$.each(['onResize','onThrottledResize'],$.proxy(function(i,handler){this._handlers[handler]=$.proxy(this[handler],this)},this));$.each(Owl.Plugins,$.proxy(function(key,plugin){this._plugins[key.charAt(0).toLowerCase()+key.slice(1)]=new plugin(this)},this));$.each(Owl.Workers,$.proxy(function(priority,worker){this._pipe.push({'filter':worker.filter,'run':$.proxy(worker.run,this)})},this));this.setup();this.initialize()}
Owl.Defaults={items:3,loop:!1,center:!1,rewind:!1,mouseDrag:!0,touchDrag:!0,pullDrag:!0,freeDrag:!1,margin:0,stagePadding:0,merge:!1,mergeFit:!0,autoWidth:!1,startPosition:0,rtl:!1,smartSpeed:250,fluidSpeed:!1,dragEndSpeed:!1,responsive:{},responsiveRefreshRate:200,responsiveBaseElement:window,fallbackEasing:'swing',info:!1,nestedItemSelector:!1,itemElement:'div',stageElement:'div',refreshClass:'owl-refresh',loadedClass:'owl-loaded',loadingClass:'owl-loading',rtlClass:'owl-rtl',responsiveClass:'owl-responsive',dragClass:'owl-drag',itemClass:'owl-item',stageClass:'owl-stage',stageOuterClass:'owl-stage-outer',grabClass:'owl-grab'};Owl.Width={Default:'default',Inner:'inner',Outer:'outer'};Owl.Type={Event:'event',State:'state'};Owl.Plugins={};Owl.Workers=[{filter:['width','settings'],run:function(){this._width=this.$element.width()}},{filter:['width','items','settings'],run:function(cache){cache.current=this._items&&this._items[this.relative(this._current)]}},{filter:['items','settings'],run:function(){this.$stage.children('.cloned').remove()}},{filter:['width','items','settings'],run:function(cache){var margin=this.settings.margin||'',grid=!this.settings.autoWidth,rtl=this.settings.rtl,css={'width':'auto','margin-left':rtl?margin:'','margin-right':rtl?'':margin};!grid&&this.$stage.children().css(css);cache.css=css}},{filter:['width','items','settings'],run:function(cache){var width=(this.width()/this.settings.items).toFixed(3)-this.settings.margin,merge=null,iterator=this._items.length,grid=!this.settings.autoWidth,widths=[];cache.items={merge:!1,width:width};while(iterator--){merge=this._mergers[iterator];merge=this.settings.mergeFit&&Math.min(merge,this.settings.items)||merge;cache.items.merge=merge>1||cache.items.merge;widths[iterator]=!grid?this._items[iterator].width():width*merge}
this._widths=widths}},{filter:['items','settings'],run:function(){var clones=[],items=this._items,settings=this.settings,view=Math.max(settings.items*2,4),size=Math.ceil(items.length/2)*2,repeat=settings.loop&&items.length?settings.rewind?view:Math.max(view,size):0,append='',prepend='';repeat/=2;while(repeat--){clones.push(this.normalize(clones.length/2,!0));append=append+items[clones[clones.length-1]][0].outerHTML;clones.push(this.normalize(items.length-1-(clones.length-1)/2,!0));prepend=items[clones[clones.length-1]][0].outerHTML+prepend}
this._clones=clones;$(append).addClass('cloned').appendTo(this.$stage);$(prepend).addClass('cloned').prependTo(this.$stage)}},{filter:['width','items','settings'],run:function(){var rtl=this.settings.rtl?1:-1,size=this._clones.length+this._items.length,iterator=-1,previous=0,current=0,coordinates=[];while(++iterator<size){previous=coordinates[iterator-1]||0;current=this._widths[this.relative(iterator)]+this.settings.margin;coordinates.push(previous+current*rtl)}
this._coordinates=coordinates}},{filter:['width','items','settings'],run:function(){var padding=this.settings.stagePadding,coordinates=this._coordinates,css={'width':Math.ceil(Math.abs(coordinates[coordinates.length-1]))+padding*2,'padding-left':padding||'','padding-right':padding||''};this.$stage.css(css)}},{filter:['width','items','settings'],run:function(cache){var iterator=this._coordinates.length,grid=!this.settings.autoWidth,items=this.$stage.children();if(grid&&cache.items.merge){while(iterator--){cache.css.width=this._widths[this.relative(iterator)];items.eq(iterator).css(cache.css)}}else if(grid){cache.css.width=cache.items.width;items.css(cache.css)}}},{filter:['items'],run:function(){this._coordinates.length<1&&this.$stage.removeAttr('style')}},{filter:['width','items','settings'],run:function(cache){cache.current=cache.current?this.$stage.children().index(cache.current):0;cache.current=Math.max(this.minimum(),Math.min(this.maximum(),cache.current));this.reset(cache.current)}},{filter:['position'],run:function(){this.animate(this.coordinates(this._current))}},{filter:['width','position','items','settings'],run:function(){var rtl=this.settings.rtl?1:-1,padding=this.settings.stagePadding*2,begin=this.coordinates(this.current())+padding,end=begin+this.width()*rtl,inner,outer,matches=[],i,n;for(i=0,n=this._coordinates.length;i<n;i++){inner=this._coordinates[i-1]||0;outer=Math.abs(this._coordinates[i])+padding*rtl;if((this.op(inner,'<=',begin)&&(this.op(inner,'>',end)))||(this.op(outer,'<',begin)&&this.op(outer,'>',end))){matches.push(i)}}
this.$stage.children('.active').removeClass('active');this.$stage.children(':eq('+matches.join('), :eq(')+')').addClass('active');if(this.settings.center){this.$stage.children('.center').removeClass('center');this.$stage.children().eq(this.current()).addClass('center')}}}];Owl.prototype.initialize=function(){this.enter('initializing');this.trigger('initialize');this.$element.toggleClass(this.settings.rtlClass,this.settings.rtl);if(this.settings.autoWidth&&!this.is('pre-loading')){var imgs,nestedSelector,width;imgs=this.$element.find('img');nestedSelector=this.settings.nestedItemSelector?'.'+this.settings.nestedItemSelector:undefined;width=this.$element.children(nestedSelector).width();if(imgs.length&&width<=0){this.preloadAutoWidthImages(imgs)}}
this.$element.addClass(this.options.loadingClass);this.$stage=$('<'+this.settings.stageElement+' class="'+this.settings.stageClass+'"/>').wrap('<div class="'+this.settings.stageOuterClass+'"/>');this.$element.append(this.$stage.parent());this.replace(this.$element.children().not(this.$stage.parent()));if(this.$element.is(':visible')){this.refresh()}else{this.invalidate('width')}
this.$element.removeClass(this.options.loadingClass).addClass(this.options.loadedClass);this.registerEventHandlers();this.leave('initializing');this.trigger('initialized')};Owl.prototype.setup=function(){var viewport=this.viewport(),overwrites=this.options.responsive,match=-1,settings=null;if(!overwrites){settings=$.extend({},this.options)}else{$.each(overwrites,function(breakpoint){if(breakpoint<=viewport&&breakpoint>match){match=Number(breakpoint)}});settings=$.extend({},this.options,overwrites[match]);if(typeof settings.stagePadding==='function'){settings.stagePadding=settings.stagePadding()}
delete settings.responsive;if(settings.responsiveClass){this.$element.attr('class',this.$element.attr('class').replace(new RegExp('('+this.options.responsiveClass+'-)\\S+\\s','g'),'$1'+match))}}
this.trigger('change',{property:{name:'settings',value:settings}});this._breakpoint=match;this.settings=settings;this.invalidate('settings');this.trigger('changed',{property:{name:'settings',value:this.settings}})};Owl.prototype.optionsLogic=function(){if(this.settings.autoWidth){this.settings.stagePadding=!1;this.settings.merge=!1}};Owl.prototype.prepare=function(item){var event=this.trigger('prepare',{content:item});if(!event.data){event.data=$('<'+this.settings.itemElement+'/>').addClass(this.options.itemClass).append(item)}
this.trigger('prepared',{content:event.data});return event.data};Owl.prototype.update=function(){var i=0,n=this._pipe.length,filter=$.proxy(function(p){return this[p]},this._invalidated),cache={};while(i<n){if(this._invalidated.all||$.grep(this._pipe[i].filter,filter).length>0){this._pipe[i].run(cache)}
i++}
this._invalidated={};!this.is('valid')&&this.enter('valid')};Owl.prototype.width=function(dimension){dimension=dimension||Owl.Width.Default;switch(dimension){case Owl.Width.Inner:case Owl.Width.Outer:return this._width;default:return this._width-this.settings.stagePadding*2+this.settings.margin}};Owl.prototype.refresh=function(){this.enter('refreshing');this.trigger('refresh');this.setup();this.optionsLogic();this.$element.addClass(this.options.refreshClass);this.update();this.$element.removeClass(this.options.refreshClass);this.leave('refreshing');this.trigger('refreshed')};Owl.prototype.onThrottledResize=function(){window.clearTimeout(this.resizeTimer);this.resizeTimer=window.setTimeout(this._handlers.onResize,this.settings.responsiveRefreshRate)};Owl.prototype.onResize=function(){if(!this._items.length){return!1}
if(this._width===this.$element.width()){return!1}
if(!this.$element.is(':visible')){return!1}
this.enter('resizing');if(this.trigger('resize').isDefaultPrevented()){this.leave('resizing');return!1}
this.invalidate('width');this.refresh();this.leave('resizing');this.trigger('resized')};Owl.prototype.registerEventHandlers=function(){if($.support.transition){this.$stage.on($.support.transition.end+'.owl.core',$.proxy(this.onTransitionEnd,this))}
if(this.settings.responsive!==!1){this.on(window,'resize',this._handlers.onThrottledResize)}
if(this.settings.mouseDrag){this.$element.addClass(this.options.dragClass);this.$stage.on('mousedown.owl.core',$.proxy(this.onDragStart,this));this.$stage.on('dragstart.owl.core selectstart.owl.core',function(){return!1})}
if(this.settings.touchDrag){this.$stage.on('touchstart.owl.core',$.proxy(this.onDragStart,this));this.$stage.on('touchcancel.owl.core',$.proxy(this.onDragEnd,this))}};Owl.prototype.onDragStart=function(event){var stage=null;if(event.which===3){return}
if($.support.transform){stage=this.$stage.css('transform').replace(/.*\(|\)| /g,'').split(',');stage={x:stage[stage.length===16?12:4],y:stage[stage.length===16?13:5]}}else{stage=this.$stage.position();stage={x:this.settings.rtl?stage.left+this.$stage.width()-this.width()+this.settings.margin:stage.left,y:stage.top}}
if(this.is('animating')){$.support.transform?this.animate(stage.x):this.$stage.stop()
this.invalidate('position')}
this.$element.toggleClass(this.options.grabClass,event.type==='mousedown');this.speed(0);this._drag.time=new Date().getTime();this._drag.target=$(event.target);this._drag.stage.start=stage;this._drag.stage.current=stage;this._drag.pointer=this.pointer(event);$(document).on('mouseup.owl.core touchend.owl.core',$.proxy(this.onDragEnd,this));$(document).one('mousemove.owl.core touchmove.owl.core',$.proxy(function(event){var delta=this.difference(this._drag.pointer,this.pointer(event));$(document).on('mousemove.owl.core touchmove.owl.core',$.proxy(this.onDragMove,this));if(Math.abs(delta.x)<Math.abs(delta.y)&&this.is('valid')){return}
event.preventDefault();this.enter('dragging');this.trigger('drag')},this))};Owl.prototype.onDragMove=function(event){var minimum=null,maximum=null,pull=null,delta=this.difference(this._drag.pointer,this.pointer(event)),stage=this.difference(this._drag.stage.start,delta);if(!this.is('dragging')){return}
event.preventDefault();if(this.settings.loop){minimum=this.coordinates(this.minimum());maximum=this.coordinates(this.maximum()+1)-minimum;stage.x=(((stage.x-minimum)%maximum+maximum)%maximum)+minimum}else{minimum=this.settings.rtl?this.coordinates(this.maximum()):this.coordinates(this.minimum());maximum=this.settings.rtl?this.coordinates(this.minimum()):this.coordinates(this.maximum());pull=this.settings.pullDrag?-1*delta.x/5:0;stage.x=Math.max(Math.min(stage.x,minimum+pull),maximum+pull)}
this._drag.stage.current=stage;this.animate(stage.x)};Owl.prototype.onDragEnd=function(event){var delta=this.difference(this._drag.pointer,this.pointer(event)),stage=this._drag.stage.current,direction=delta.x>0^this.settings.rtl?'left':'right';$(document).off('.owl.core');this.$element.removeClass(this.options.grabClass);if(delta.x!==0&&this.is('dragging')||!this.is('valid')){this.speed(this.settings.dragEndSpeed||this.settings.smartSpeed);this.current(this.closest(stage.x,delta.x!==0?direction:this._drag.direction));this.invalidate('position');this.update();this._drag.direction=direction;if(Math.abs(delta.x)>3||new Date().getTime()-this._drag.time>300){this._drag.target.one('click.owl.core',function(){return!1})}}
if(!this.is('dragging')){return}
this.leave('dragging');this.trigger('dragged')};Owl.prototype.closest=function(coordinate,direction){var position=-1,pull=30,width=this.width(),coordinates=this.coordinates();if(!this.settings.freeDrag){$.each(coordinates,$.proxy(function(index,value){if(direction==='left'&&coordinate>value-pull&&coordinate<value+pull){position=index}else if(direction==='right'&&coordinate>value-width-pull&&coordinate<value-width+pull){position=index+1}else if(this.op(coordinate,'<',value)&&this.op(coordinate,'>',coordinates[index+1]||value-width)){position=direction==='left'?index+1:index}
return position===-1},this))}
if(!this.settings.loop){if(this.op(coordinate,'>',coordinates[this.minimum()])){position=coordinate=this.minimum()}else if(this.op(coordinate,'<',coordinates[this.maximum()])){position=coordinate=this.maximum()}}
return position};Owl.prototype.animate=function(coordinate){var animate=this.speed()>0;this.is('animating')&&this.onTransitionEnd();if(animate){this.enter('animating');this.trigger('translate')}

if($.support.transform3d&&$.support.transition){this.$stage.css({transform:'translate3d('+coordinate+'px,0px,0px)',transition:(this.speed()/1000)+'s'})}else if(animate){this.$stage.animate({left:coordinate+'px'},this.speed(),this.settings.fallbackEasing,$.proxy(this.onTransitionEnd,this))}else{this.$stage.css({left:coordinate+'px'})}};Owl.prototype.is=function(state){return this._states.current[state]&&this._states.current[state]>0};Owl.prototype.current=function(position){if(position===undefined){return this._current}
if(this._items.length===0){return undefined}
position=this.normalize(position);if(this._current!==position){var event=this.trigger('change',{property:{name:'position',value:position}});if(event.data!==undefined){position=this.normalize(event.data)}
this._current=position;this.invalidate('position');this.trigger('changed',{property:{name:'position',value:this._current}})}
return this._current};Owl.prototype.invalidate=function(part){if($.type(part)==='string'){this._invalidated[part]=!0;this.is('valid')&&this.leave('valid')}
return $.map(this._invalidated,function(v,i){return i})};Owl.prototype.reset=function(position){position=this.normalize(position);if(position===undefined){return}
this._speed=0;this._current=position;this.suppress(['translate','translated']);this.animate(this.coordinates(position));this.release(['translate','translated'])};Owl.prototype.normalize=function(position,relative){var n=this._items.length,m=relative?0:this._clones.length;if(!this.isNumeric(position)||n<1){position=undefined}else if(position<0||position>=n+m){position=((position-m/2)%n+n)%n+m/2}
return position};Owl.prototype.relative=function(position){position-=this._clones.length/2;return this.normalize(position,!0)};Owl.prototype.maximum=function(relative){var settings=this.settings,maximum=this._coordinates.length,iterator,reciprocalItemsWidth,elementWidth;if(settings.loop){maximum=this._clones.length/2+this._items.length-1}else if(settings.autoWidth||settings.merge){iterator=this._items.length;reciprocalItemsWidth=this._items[--iterator].width();elementWidth=this.$element.width();while(iterator--){reciprocalItemsWidth+=this._items[iterator].width()+this.settings.margin;if(reciprocalItemsWidth>elementWidth){break}}
maximum=iterator+1}else if(settings.center){maximum=this._items.length-1}else{maximum=this._items.length-settings.items}
if(relative){maximum-=this._clones.length/2}
return Math.max(maximum,0)};Owl.prototype.minimum=function(relative){return relative?0:this._clones.length/2};Owl.prototype.items=function(position){if(position===undefined){return this._items.slice()}
position=this.normalize(position,!0);return this._items[position]};Owl.prototype.mergers=function(position){if(position===undefined){return this._mergers.slice()}
position=this.normalize(position,!0);return this._mergers[position]};Owl.prototype.clones=function(position){var odd=this._clones.length/2,even=odd+this._items.length,map=function(index){return index%2===0?even+index/2:odd-(index+1)/2};if(position===undefined){return $.map(this._clones,function(v,i){return map(i)})}
return $.map(this._clones,function(v,i){return v===position?map(i):null})};Owl.prototype.speed=function(speed){if(speed!==undefined){this._speed=speed}
return this._speed};Owl.prototype.coordinates=function(position){var multiplier=1,newPosition=position-1,coordinate;if(position===undefined){return $.map(this._coordinates,$.proxy(function(coordinate,index){return this.coordinates(index)},this))}
if(this.settings.center){if(this.settings.rtl){multiplier=-1;newPosition=position+1}
coordinate=this._coordinates[position];coordinate+=(this.width()-coordinate+(this._coordinates[newPosition]||0))/2*multiplier}else{coordinate=this._coordinates[newPosition]||0}
coordinate=Math.ceil(coordinate);return coordinate};Owl.prototype.duration=function(from,to,factor){if(factor===0){return 0}
return Math.min(Math.max(Math.abs(to-from),1),6)*Math.abs((factor||this.settings.smartSpeed))};Owl.prototype.to=function(position,speed){var current=this.current(),revert=null,distance=position-this.relative(current),direction=(distance>0)-(distance<0),items=this._items.length,minimum=this.minimum(),maximum=this.maximum();if(this.settings.loop){if(!this.settings.rewind&&Math.abs(distance)>items/2){distance+=direction*-1*items}
position=current+distance;revert=((position-minimum)%items+items)%items+minimum;if(revert!==position&&revert-distance<=maximum&&revert-distance>0){current=revert-distance;position=revert;this.reset(current)}}else if(this.settings.rewind){maximum+=1;position=(position%maximum+maximum)%maximum}else{position=Math.max(minimum,Math.min(maximum,position))}
this.speed(this.duration(current,position,speed));this.current(position);if(this.$element.is(':visible')){this.update()}};Owl.prototype.next=function(speed){speed=speed||!1;this.to(this.relative(this.current())+1,speed)};Owl.prototype.prev=function(speed){speed=speed||!1;this.to(this.relative(this.current())-1,speed)};Owl.prototype.onTransitionEnd=function(event){if(event!==undefined){event.stopPropagation();if((event.target||event.srcElement||event.originalTarget)!==this.$stage.get(0)){return!1}}
this.leave('animating');this.trigger('translated')};Owl.prototype.viewport=function(){var width;if(this.options.responsiveBaseElement!==window){width=$(this.options.responsiveBaseElement).width()}else if(window.innerWidth){width=window.innerWidth}else if(document.documentElement&&document.documentElement.clientWidth){width=document.documentElement.clientWidth}else{throw 'Can not detect viewport width.'}
return width};Owl.prototype.replace=function(content){this.$stage.empty();this._items=[];if(content){content=(content instanceof jQuery)?content:$(content)}
if(this.settings.nestedItemSelector){content=content.find('.'+this.settings.nestedItemSelector)}
content.filter(function(){return this.nodeType===1}).each($.proxy(function(index,item){item=this.prepare(item);this.$stage.append(item);this._items.push(item);this._mergers.push(item.find('[data-merge]').addBack('[data-merge]').attr('data-merge')*1||1)},this));this.reset(this.isNumeric(this.settings.startPosition)?this.settings.startPosition:0);this.invalidate('items')};Owl.prototype.add=function(content,position){var current=this.relative(this._current);position=position===undefined?this._items.length:this.normalize(position,!0);content=content instanceof jQuery?content:$(content);this.trigger('add',{content:content,position:position});content=this.prepare(content);if(this._items.length===0||position===this._items.length){this._items.length===0&&this.$stage.append(content);this._items.length!==0&&this._items[position-1].after(content);this._items.push(content);this._mergers.push(content.find('[data-merge]').addBack('[data-merge]').attr('data-merge')*1||1)}else{this._items[position].before(content);this._items.splice(position,0,content);this._mergers.splice(position,0,content.find('[data-merge]').addBack('[data-merge]').attr('data-merge')*1||1)}
this._items[current]&&this.reset(this._items[current].index());this.invalidate('items');this.trigger('added',{content:content,position:position})};Owl.prototype.remove=function(position){position=this.normalize(position,!0);if(position===undefined){return}
this.trigger('remove',{content:this._items[position],position:position});this._items[position].remove();this._items.splice(position,1);this._mergers.splice(position,1);this.invalidate('items');this.trigger('removed',{content:null,position:position})};Owl.prototype.preloadAutoWidthImages=function(images){images.each($.proxy(function(i,element){this.enter('pre-loading');element=$(element);$(new Image()).one('load',$.proxy(function(e){element.attr('src',e.target.src);element.css('opacity',1);this.leave('pre-loading');!this.is('pre-loading')&&!this.is('initializing')&&this.refresh()},this)).attr('src',element.attr('src')||element.attr('data-src')||element.attr('data-src-retina'))},this))};Owl.prototype.destroy=function(){this.$element.off('.owl.core');this.$stage.off('.owl.core');$(document).off('.owl.core');if(this.settings.responsive!==!1){window.clearTimeout(this.resizeTimer);this.off(window,'resize',this._handlers.onThrottledResize)}
for(var i in this._plugins){this._plugins[i].destroy()}
this.$stage.children('.cloned').remove();this.$stage.unwrap();this.$stage.children().contents().unwrap();this.$stage.children().unwrap();this.$element.removeClass(this.options.refreshClass).removeClass(this.options.loadingClass).removeClass(this.options.loadedClass).removeClass(this.options.rtlClass).removeClass(this.options.dragClass).removeClass(this.options.grabClass).attr('class',this.$element.attr('class').replace(new RegExp(this.options.responsiveClass+'-\\S+\\s','g'),'')).removeData('owl.carousel')};Owl.prototype.op=function(a,o,b){var rtl=this.settings.rtl;switch(o){case '<':return rtl?a>b:a<b;case '>':return rtl?a<b:a>b;case '>=':return rtl?a<=b:a>=b;case '<=':return rtl?a>=b:a<=b;default:break}};Owl.prototype.on=function(element,event,listener,capture){if(element.addEventListener){element.addEventListener(event,listener,capture)}else if(element.attachEvent){element.attachEvent('on'+event,listener)}};Owl.prototype.off=function(element,event,listener,capture){if(element.removeEventListener){element.removeEventListener(event,listener,capture)}else if(element.detachEvent){element.detachEvent('on'+event,listener)}};Owl.prototype.trigger=function(name,data,namespace,state,enter){var status={item:{count:this._items.length,index:this.current()}},handler=$.camelCase($.grep(['on',name,namespace],function(v){return v}).join('-').toLowerCase()),event=$.Event([name,'owl',namespace||'carousel'].join('.').toLowerCase(),$.extend({relatedTarget:this},status,data));if(!this._supress[name]){$.each(this._plugins,function(name,plugin){if(plugin.onTrigger){plugin.onTrigger(event)}});this.register({type:Owl.Type.Event,name:name});this.$element.trigger(event);if(this.settings&&typeof this.settings[handler]==='function'){this.settings[handler].call(this,event)}}
return event};Owl.prototype.enter=function(name){$.each([name].concat(this._states.tags[name]||[]),$.proxy(function(i,name){if(this._states.current[name]===undefined){this._states.current[name]=0}
this._states.current[name]++},this))};Owl.prototype.leave=function(name){$.each([name].concat(this._states.tags[name]||[]),$.proxy(function(i,name){this._states.current[name]--},this))};Owl.prototype.register=function(object){if(object.type===Owl.Type.Event){if(!$.event.special[object.name]){$.event.special[object.name]={}}
if(!$.event.special[object.name].owl){var _default=$.event.special[object.name]._default;$.event.special[object.name]._default=function(e){if(_default&&_default.apply&&(!e.namespace||e.namespace.indexOf('owl')===-1)){return _default.apply(this,arguments)}
return e.namespace&&e.namespace.indexOf('owl')>-1};$.event.special[object.name].owl=!0}}else if(object.type===Owl.Type.State){if(!this._states.tags[object.name]){this._states.tags[object.name]=object.tags}else{this._states.tags[object.name]=this._states.tags[object.name].concat(object.tags)}
this._states.tags[object.name]=$.grep(this._states.tags[object.name],$.proxy(function(tag,i){return $.inArray(tag,this._states.tags[object.name])===i},this))}};Owl.prototype.suppress=function(events){$.each(events,$.proxy(function(index,event){this._supress[event]=!0},this))};Owl.prototype.release=function(events){$.each(events,$.proxy(function(index,event){delete this._supress[event]},this))};Owl.prototype.pointer=function(event){var result={x:null,y:null};event=event.originalEvent||event||window.event;event=event.touches&&event.touches.length?event.touches[0]:event.changedTouches&&event.changedTouches.length?event.changedTouches[0]:event;if(event.pageX){result.x=event.pageX;result.y=event.pageY}else{result.x=event.clientX;result.y=event.clientY}
return result};Owl.prototype.isNumeric=function(number){return!isNaN(parseFloat(number))};Owl.prototype.difference=function(first,second){return{x:first.x-second.x,y:first.y-second.y}};$.fn.owlCarousel=function(option){var args=Array.prototype.slice.call(arguments,1);return this.each(function(){var $this=$(this),data=$this.data('owl.carousel');if(!data){data=new Owl(this,typeof option=='object'&&option);$this.data('owl.carousel',data);$.each(['next','prev','to','destroy','refresh','replace','add','remove'],function(i,event){data.register({type:Owl.Type.Event,name:event});data.$element.on(event+'.owl.carousel.core',$.proxy(function(e){if(e.namespace&&e.relatedTarget!==this){this.suppress([event]);data[event].apply(this,[].slice.call(arguments,1));this.release([event])}},data))})}
if(typeof option=='string'&&option.charAt(0)!=='_'){data[option].apply(data,args)}})};$.fn.owlCarousel.Constructor=Owl})(window.Zepto||window.jQuery,window,document);(function($,window,document,undefined){var AutoRefresh=function(carousel){this._core=carousel;this._interval=null;this._visible=null;this._handlers={'initialized.owl.carousel':$.proxy(function(e){if(e.namespace&&this._core.settings.autoRefresh){this.watch()}},this)};this._core.options=$.extend({},AutoRefresh.Defaults,this._core.options);this._core.$element.on(this._handlers)};AutoRefresh.Defaults={autoRefresh:!0,autoRefreshInterval:500};AutoRefresh.prototype.watch=function(){if(this._interval){return}
this._visible=this._core.$element.is(':visible');this._interval=window.setInterval($.proxy(this.refresh,this),this._core.settings.autoRefreshInterval)};AutoRefresh.prototype.refresh=function(){if(this._core.$element.is(':visible')===this._visible){return}
this._visible=!this._visible;this._core.$element.toggleClass('owl-hidden',!this._visible);this._visible&&(this._core.invalidate('width')&&this._core.refresh())};AutoRefresh.prototype.destroy=function(){var handler,property;window.clearInterval(this._interval);for(handler in this._handlers){this._core.$element.off(handler,this._handlers[handler])}
for(property in Object.getOwnPropertyNames(this)){typeof this[property]!='function'&&(this[property]=null)}};$.fn.owlCarousel.Constructor.Plugins.AutoRefresh=AutoRefresh})(window.Zepto||window.jQuery,window,document);(function($,window,document,undefined){var Lazy=function(carousel){this._core=carousel;this._loaded=[];this._handlers={'initialized.owl.carousel change.owl.carousel resized.owl.carousel':$.proxy(function(e){if(!e.namespace){return}
if(!this._core.settings||!this._core.settings.lazyLoad){return}
if((e.property&&e.property.name=='position')||e.type=='initialized'){var settings=this._core.settings,n=(settings.center&&Math.ceil(settings.items/2)||settings.items),i=((settings.center&&n*-1)||0),position=(e.property&&e.property.value!==undefined?e.property.value:this._core.current())+i,clones=this._core.clones().length,load=$.proxy(function(i,v){this.load(v)},this);while(i++<n){this.load(clones/2+this._core.relative(position));clones&&$.each(this._core.clones(this._core.relative(position)),load);position++}}},this)};this._core.options=$.extend({},Lazy.Defaults,this._core.options);this._core.$element.on(this._handlers)};Lazy.Defaults={lazyLoad:!1};Lazy.prototype.load=function(position){var $item=this._core.$stage.children().eq(position),$elements=$item&&$item.find('.owl-lazy');if(!$elements||$.inArray($item.get(0),this._loaded)>-1){return}
$elements.each($.proxy(function(index,element){var $element=$(element),image,url=(window.devicePixelRatio>1&&$element.attr('data-src-retina'))||$element.attr('data-src');this._core.trigger('load',{element:$element,url:url},'lazy');if($element.is('img')){$element.one('load.owl.lazy',$.proxy(function(){$element.css('opacity',1);this._core.trigger('loaded',{element:$element,url:url},'lazy')},this)).attr('src',url)}else{image=new Image();image.onload=$.proxy(function(){$element.css({'background-image':'url('+url+')','opacity':'1'});this._core.trigger('loaded',{element:$element,url:url},'lazy')},this);image.src=url}},this));this._loaded.push($item.get(0))};Lazy.prototype.destroy=function(){var handler,property;for(handler in this.handlers){this._core.$element.off(handler,this.handlers[handler])}
for(property in Object.getOwnPropertyNames(this)){typeof this[property]!='function'&&(this[property]=null)}};$.fn.owlCarousel.Constructor.Plugins.Lazy=Lazy})(window.Zepto||window.jQuery,window,document);(function($,window,document,undefined){var AutoHeight=function(carousel){this._core=carousel;this._handlers={'initialized.owl.carousel refreshed.owl.carousel':$.proxy(function(e){if(e.namespace&&this._core.settings.autoHeight){this.update()}},this),'changed.owl.carousel':$.proxy(function(e){if(e.namespace&&this._core.settings.autoHeight&&e.property.name=='position'){this.update()}},this),'loaded.owl.lazy':$.proxy(function(e){if(e.namespace&&this._core.settings.autoHeight&&e.element.closest('.'+this._core.settings.itemClass).index()===this._core.current()){this.update()}},this)};this._core.options=$.extend({},AutoHeight.Defaults,this._core.options);this._core.$element.on(this._handlers)};AutoHeight.Defaults={autoHeight:!1,autoHeightClass:'owl-height'};AutoHeight.prototype.update=function(){var start=this._core._current,end=start+this._core.settings.items,visible=this._core.$stage.children().toArray().slice(start,end),heights=[],maxheight=0;$.each(visible,function(index,item){heights.push($(item).height())});maxheight=Math.max.apply(null,heights);this._core.$stage.parent().height(maxheight).addClass(this._core.settings.autoHeightClass)};AutoHeight.prototype.destroy=function(){var handler,property;for(handler in this._handlers){this._core.$element.off(handler,this._handlers[handler])}
for(property in Object.getOwnPropertyNames(this)){typeof this[property]!='function'&&(this[property]=null)}};$.fn.owlCarousel.Constructor.Plugins.AutoHeight=AutoHeight})(window.Zepto||window.jQuery,window,document);(function($,window,document,undefined){var Video=function(carousel){this._core=carousel;this._videos={};this._playing=null;this._handlers={'initialized.owl.carousel':$.proxy(function(e){if(e.namespace){this._core.register({type:'state',name:'playing',tags:['interacting']})}},this),'resize.owl.carousel':$.proxy(function(e){if(e.namespace&&this._core.settings.video&&this.isInFullScreen()){e.preventDefault()}},this),'refreshed.owl.carousel':$.proxy(function(e){if(e.namespace&&this._core.is('resizing')){this._core.$stage.find('.cloned .owl-video-frame').remove()}},this),'changed.owl.carousel':$.proxy(function(e){if(e.namespace&&e.property.name==='position'&&this._playing){this.stop()}},this),'prepared.owl.carousel':$.proxy(function(e){if(!e.namespace){return}
var $element=$(e.content).find('.owl-video');if($element.length){$element.css('display','none');this.fetch($element,$(e.content))}},this)};this._core.options=$.extend({},Video.Defaults,this._core.options);this._core.$element.on(this._handlers);this._core.$element.on('click.owl.video','.owl-video-play-icon',$.proxy(function(e){this.play(e)},this))};Video.Defaults={video:!1,videoHeight:!1,videoWidth:!1};Video.prototype.fetch=function(target,item){var type=(function(){if(target.attr('data-vimeo-id')){return'vimeo'}else if(target.attr('data-vzaar-id')){return'vzaar'}else{return'youtube'}})(),id=target.attr('data-vimeo-id')||target.attr('data-youtube-id')||target.attr('data-vzaar-id'),width=target.attr('data-width')||this._core.settings.videoWidth,height=target.attr('data-height')||this._core.settings.videoHeight,url=target.attr('href');if(url){id=url.match(/(http:|https:|)\/\/(player.|www.|app.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com)|vzaar\.com)\/(video\/|videos\/|embed\/|channels\/.+\/|groups\/.+\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/);if(id[3].indexOf('youtu')>-1){type='youtube'}else if(id[3].indexOf('vimeo')>-1){type='vimeo'}else if(id[3].indexOf('vzaar')>-1){type='vzaar'}else{throw new Error('Video URL not supported.')}
id=id[6]}else{throw new Error('Missing video URL.')}
this._videos[url]={type:type,id:id,width:width,height:height};item.attr('data-video',url);this.thumbnail(target,this._videos[url])};Video.prototype.thumbnail=function(target,video){var tnLink,icon,path,dimensions=video.width&&video.height?'style="width:'+video.width+'px;height:'+video.height+'px;"':'',customTn=target.find('img'),srcType='src',lazyClass='',settings=this._core.settings,create=function(path){icon='<div class="owl-video-play-icon"></div>';if(settings.lazyLoad){tnLink='<div class="owl-video-tn '+lazyClass+'" '+srcType+'="'+path+'"></div>'}else{tnLink='<div class="owl-video-tn" style="opacity:1;background-image:url('+path+')"></div>'}
target.after(tnLink);target.after(icon)};target.wrap('<div class="owl-video-wrapper"'+dimensions+'></div>');if(this._core.settings.lazyLoad){srcType='data-src';lazyClass='owl-lazy'}
if(customTn.length){create(customTn.attr(srcType));customTn.remove();return!1}
if(video.type==='youtube'){path="//img.youtube.com/vi/"+video.id+"/hqdefault.jpg";create(path)}else if(video.type==='vimeo'){$.ajax({type:'GET',url:'//vimeo.com/api/v2/video/'+video.id+'.json',jsonp:'callback',dataType:'jsonp',success:function(data){path=data[0].thumbnail_large;create(path)}})}else if(video.type==='vzaar'){$.ajax({type:'GET',url:'//vzaar.com/api/videos/'+video.id+'.json',jsonp:'callback',dataType:'jsonp',success:function(data){path=data.framegrab_url;create(path)}})}};Video.prototype.stop=function(){this._core.trigger('stop',null,'video');this._playing.find('.owl-video-frame').remove();this._playing.removeClass('owl-video-playing');this._playing=null;this._core.leave('playing');this._core.trigger('stopped',null,'video')};Video.prototype.play=function(event){var target=$(event.target),item=target.closest('.'+this._core.settings.itemClass),video=this._videos[item.attr('data-video')],width=video.width||'100%',height=video.height||this._core.$stage.height(),html;if(this._playing){return}
this._core.enter('playing');this._core.trigger('play',null,'video');item=this._core.items(this._core.relative(item.index()));this._core.reset(item.index());if(video.type==='youtube'){html='<iframe width="'+width+'" height="'+height+'" src="//www.youtube.com/embed/'+video.id+'?autoplay=1&v='+video.id+'" frameborder="0" allowfullscreen></iframe>'}else if(video.type==='vimeo'){html='<iframe src="//player.vimeo.com/video/'+video.id+'?autoplay=1" width="'+width+'" height="'+height+'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'}else if(video.type==='vzaar'){html='<iframe frameborder="0"'+'height="'+height+'"'+'width="'+width+'" allowfullscreen mozallowfullscreen webkitAllowFullScreen '+'src="//view.vzaar.com/'+video.id+'/player?autoplay=true"></iframe>'}
$('<div class="owl-video-frame">'+html+'</div>').insertAfter(item.find('.owl-video'));this._playing=item.addClass('owl-video-playing')};Video.prototype.isInFullScreen=function(){var element=document.fullscreenElement||document.mozFullScreenElement||document.webkitFullscreenElement;return element&&$(element).parent().hasClass('owl-video-frame')};Video.prototype.destroy=function(){var handler,property;this._core.$element.off('click.owl.video');for(handler in this._handlers){this._core.$element.off(handler,this._handlers[handler])}
for(property in Object.getOwnPropertyNames(this)){typeof this[property]!='function'&&(this[property]=null)}};$.fn.owlCarousel.Constructor.Plugins.Video=Video})(window.Zepto||window.jQuery,window,document);(function($,window,document,undefined){var Animate=function(scope){this.core=scope;this.core.options=$.extend({},Animate.Defaults,this.core.options);this.swapping=!0;this.previous=undefined;this.next=undefined;this.handlers={'change.owl.carousel':$.proxy(function(e){if(e.namespace&&e.property.name=='position'){this.previous=this.core.current();this.next=e.property.value}},this),'drag.owl.carousel dragged.owl.carousel translated.owl.carousel':$.proxy(function(e){if(e.namespace){this.swapping=e.type=='translated'}},this),'translate.owl.carousel':$.proxy(function(e){if(e.namespace&&this.swapping&&(this.core.options.animateOut||this.core.options.animateIn)){this.swap()}},this)};this.core.$element.on(this.handlers)};Animate.Defaults={animateOut:!1,animateIn:!1};Animate.prototype.swap=function(){if(this.core.settings.items!==1){return}
if(!$.support.animation||!$.support.transition){return}
this.core.speed(0);var left,clear=$.proxy(this.clear,this),previous=this.core.$stage.children().eq(this.previous),next=this.core.$stage.children().eq(this.next),incoming=this.core.settings.animateIn,outgoing=this.core.settings.animateOut;if(this.core.current()===this.previous){return}
if(outgoing){left=this.core.coordinates(this.previous)-this.core.coordinates(this.next);previous.one($.support.animation.end,clear).css({'left':left+'px'}).addClass('animated owl-animated-out').addClass(outgoing)}
if(incoming){next.one($.support.animation.end,clear).addClass('animated owl-animated-in').addClass(incoming)}};Animate.prototype.clear=function(e){$(e.target).css({'left':''}).removeClass('animated owl-animated-out owl-animated-in').removeClass(this.core.settings.animateIn).removeClass(this.core.settings.animateOut);this.core.onTransitionEnd()};Animate.prototype.destroy=function(){var handler,property;for(handler in this.handlers){this.core.$element.off(handler,this.handlers[handler])}
for(property in Object.getOwnPropertyNames(this)){typeof this[property]!='function'&&(this[property]=null)}};$.fn.owlCarousel.Constructor.Plugins.Animate=Animate})(window.Zepto||window.jQuery,window,document);(function($,window,document,undefined){var Autoplay=function(carousel){this._core=carousel;this._timeout=null;this._paused=!1;this._handlers={'changed.owl.carousel':$.proxy(function(e){if(e.namespace&&e.property.name==='settings'){if(this._core.settings.autoplay){this.play()}else{this.stop()}}else if(e.namespace&&e.property.name==='position'){if(this._core.settings.autoplay){this._setAutoPlayInterval()}}},this),'initialized.owl.carousel':$.proxy(function(e){if(e.namespace&&this._core.settings.autoplay){this.play()}},this),'play.owl.autoplay':$.proxy(function(e,t,s){if(e.namespace){this.play(t,s)}},this),'stop.owl.autoplay':$.proxy(function(e){if(e.namespace){this.stop()}},this),'mouseover.owl.autoplay':$.proxy(function(){if(this._core.settings.autoplayHoverPause&&this._core.is('rotating')){this.pause()}},this),'mouseleave.owl.autoplay':$.proxy(function(){if(this._core.settings.autoplayHoverPause&&this._core.is('rotating')){this.play()}},this),'touchstart.owl.core':$.proxy(function(){if(this._core.settings.autoplayHoverPause&&this._core.is('rotating')){this.pause()}},this),'touchend.owl.core':$.proxy(function(){if(this._core.settings.autoplayHoverPause){this.play()}},this)};this._core.$element.on(this._handlers);this._core.options=$.extend({},Autoplay.Defaults,this._core.options)};Autoplay.Defaults={autoplay:!1,autoplayTimeout:5000,autoplayHoverPause:!1,autoplaySpeed:!1};Autoplay.prototype.play=function(timeout,speed){this._paused=!1;if(this._core.is('rotating')){return}
this._core.enter('rotating');this._setAutoPlayInterval()};Autoplay.prototype._getNextTimeout=function(timeout,speed){if(this._timeout){window.clearTimeout(this._timeout)}
return window.setTimeout($.proxy(function(){if(this._paused||this._core.is('busy')||this._core.is('interacting')||document.hidden){return}
this._core.next(speed||this._core.settings.autoplaySpeed)},this),timeout||this._core.settings.autoplayTimeout)};Autoplay.prototype._setAutoPlayInterval=function(){this._timeout=this._getNextTimeout()};Autoplay.prototype.stop=function(){if(!this._core.is('rotating')){return}
window.clearTimeout(this._timeout);this._core.leave('rotating')};Autoplay.prototype.pause=function(){if(!this._core.is('rotating')){return}
this._paused=!0};Autoplay.prototype.destroy=function(){var handler,property;this.stop();for(handler in this._handlers){this._core.$element.off(handler,this._handlers[handler])}
for(property in Object.getOwnPropertyNames(this)){typeof this[property]!='function'&&(this[property]=null)}};$.fn.owlCarousel.Constructor.Plugins.autoplay=Autoplay})(window.Zepto||window.jQuery,window,document);(function($,window,document,undefined){'use strict';var Navigation=function(carousel){this._core=carousel;this._initialized=!1;this._pages=[];this._controls={};this._templates=[];this.$element=this._core.$element;this._overrides={next:this._core.next,prev:this._core.prev,to:this._core.to};this._handlers={'prepared.owl.carousel':$.proxy(function(e){if(e.namespace&&this._core.settings.dotsData){this._templates.push('<div class="'+this._core.settings.dotClass+'">'+$(e.content).find('[data-dot]').addBack('[data-dot]').attr('data-dot')+'</div>')}},this),'added.owl.carousel':$.proxy(function(e){if(e.namespace&&this._core.settings.dotsData){this._templates.splice(e.position,0,this._templates.pop())}},this),'remove.owl.carousel':$.proxy(function(e){if(e.namespace&&this._core.settings.dotsData){this._templates.splice(e.position,1)}},this),'changed.owl.carousel':$.proxy(function(e){if(e.namespace&&e.property.name=='position'){this.draw()}},this),'initialized.owl.carousel':$.proxy(function(e){if(e.namespace&&!this._initialized){this._core.trigger('initialize',null,'navigation');this.initialize();this.update();this.draw();this._initialized=!0;this._core.trigger('initialized',null,'navigation')}},this),'refreshed.owl.carousel':$.proxy(function(e){if(e.namespace&&this._initialized){this._core.trigger('refresh',null,'navigation');this.update();this.draw();this._core.trigger('refreshed',null,'navigation')}},this)};this._core.options=$.extend({},Navigation.Defaults,this._core.options);this.$element.on(this._handlers)};Navigation.Defaults={nav:!1,navText:['prev','next'],navSpeed:!1,navElement:'div',navContainer:!1,navContainerClass:'owl-nav',navClass:['owl-prev','owl-next'],slideBy:1,dotClass:'owl-dot',dotsClass:'owl-dots',dots:!0,dotsEach:!1,dotsData:!1,dotsSpeed:!1,dotsContainer:!1};Navigation.prototype.initialize=function(){var override,settings=this._core.settings;this._controls.$relative=(settings.navContainer?$(settings.navContainer):$('<div>').addClass(settings.navContainerClass).appendTo(this.$element)).addClass('disabled');this._controls.$previous=$('<'+settings.navElement+'>').addClass(settings.navClass[0]).html(settings.navText[0]).prependTo(this._controls.$relative).on('click',$.proxy(function(e){this.prev(settings.navSpeed)},this));this._controls.$next=$('<'+settings.navElement+'>').addClass(settings.navClass[1]).html(settings.navText[1]).appendTo(this._controls.$relative).on('click',$.proxy(function(e){this.next(settings.navSpeed)},this));if(!settings.dotsData){this._templates=[$('<div>').addClass(settings.dotClass).append($('<span>')).prop('outerHTML')]}
this._controls.$absolute=(settings.dotsContainer?$(settings.dotsContainer):$('<div>').addClass(settings.dotsClass).appendTo(this.$element)).addClass('disabled');this._controls.$absolute.on('click','div',$.proxy(function(e){var index=$(e.target).parent().is(this._controls.$absolute)?$(e.target).index():$(e.target).parent().index();e.preventDefault();this.to(index,settings.dotsSpeed)},this));for(override in this._overrides){this._core[override]=$.proxy(this[override],this)}};Navigation.prototype.destroy=function(){var handler,control,property,override;for(handler in this._handlers){this.$element.off(handler,this._handlers[handler])}
for(control in this._controls){this._controls[control].remove()}
for(override in this.overides){this._core[override]=this._overrides[override]}
for(property in Object.getOwnPropertyNames(this)){typeof this[property]!='function'&&(this[property]=null)}};Navigation.prototype.update=function(){var i,j,k,lower=this._core.clones().length/2,upper=lower+this._core.items().length,maximum=this._core.maximum(!0),settings=this._core.settings,size=settings.center||settings.autoWidth||settings.dotsData?1:settings.dotsEach||settings.items;if(settings.slideBy!=='page'){settings.slideBy=Math.min(settings.slideBy,settings.items)}
if(settings.dots||settings.slideBy=='page'){this._pages=[];for(i=lower,j=0,k=0;i<upper;i++){if(j>=size||j===0){this._pages.push({start:Math.min(maximum,i-lower),end:i-lower+size-1});if(Math.min(maximum,i-lower)===maximum){break}
j=0,++k}
j+=this._core.mergers(this._core.relative(i))}}};Navigation.prototype.draw=function(){var difference,settings=this._core.settings,disabled=this._core.items().length<=settings.items,index=this._core.relative(this._core.current()),loop=settings.loop||settings.rewind;this._controls.$relative.toggleClass('disabled',!settings.nav||disabled);if(settings.nav){this._controls.$previous.toggleClass('disabled',!loop&&index<=this._core.minimum(!0));this._controls.$next.toggleClass('disabled',!loop&&index>=this._core.maximum(!0))}
this._controls.$absolute.toggleClass('disabled',!settings.dots||disabled);if(settings.dots){difference=this._pages.length-this._controls.$absolute.children().length;if(settings.dotsData&&difference!==0){this._controls.$absolute.html(this._templates.join(''))}else if(difference>0){this._controls.$absolute.append(new Array(difference+1).join(this._templates[0]))}else if(difference<0){this._controls.$absolute.children().slice(difference).remove()}
this._controls.$absolute.find('.active').removeClass('active');this._controls.$absolute.children().eq($.inArray(this.current(),this._pages)).addClass('active')}};Navigation.prototype.onTrigger=function(event){var settings=this._core.settings;event.page={index:$.inArray(this.current(),this._pages),count:this._pages.length,size:settings&&(settings.center||settings.autoWidth||settings.dotsData?1:settings.dotsEach||settings.items)}};Navigation.prototype.current=function(){var current=this._core.relative(this._core.current());return $.grep(this._pages,$.proxy(function(page,index){return page.start<=current&&page.end>=current},this)).pop()};Navigation.prototype.getPosition=function(successor){var position,length,settings=this._core.settings;if(settings.slideBy=='page'){position=$.inArray(this.current(),this._pages);length=this._pages.length;successor?++position:--position;position=this._pages[((position%length)+length)%length].start}else{position=this._core.relative(this._core.current());length=this._core.items().length;successor?position+=settings.slideBy:position-=settings.slideBy}
return position};Navigation.prototype.next=function(speed){$.proxy(this._overrides.to,this._core)(this.getPosition(!0),speed)};Navigation.prototype.prev=function(speed){$.proxy(this._overrides.to,this._core)(this.getPosition(!1),speed)};Navigation.prototype.to=function(position,speed,standard){var length;if(!standard&&this._pages.length){length=this._pages.length;$.proxy(this._overrides.to,this._core)(this._pages[((position%length)+length)%length].start,speed)}else{$.proxy(this._overrides.to,this._core)(position,speed)}};$.fn.owlCarousel.Constructor.Plugins.Navigation=Navigation})(window.Zepto||window.jQuery,window,document);(function($,window,document,undefined){'use strict';var Hash=function(carousel){this._core=carousel;this._hashes={};this.$element=this._core.$element;this._handlers={'initialized.owl.carousel':$.proxy(function(e){if(e.namespace&&this._core.settings.startPosition==='URLHash'){$(window).trigger('hashchange.owl.navigation')}},this),'prepared.owl.carousel':$.proxy(function(e){if(e.namespace){var hash=$(e.content).find('[data-hash]').addBack('[data-hash]').attr('data-hash');if(!hash){return}
this._hashes[hash]=e.content}},this),'changed.owl.carousel':$.proxy(function(e){if(e.namespace&&e.property.name==='position'){var current=this._core.items(this._core.relative(this._core.current())),hash=$.map(this._hashes,function(item,hash){return item===current?hash:null}).join();if(!hash||window.location.hash.slice(1)===hash){return}
window.location.hash=hash}},this)};this._core.options=$.extend({},Hash.Defaults,this._core.options);this.$element.on(this._handlers);$(window).on('hashchange.owl.navigation',$.proxy(function(e){var hash=window.location.hash.substring(1),items=this._core.$stage.children(),position=this._hashes[hash]&&items.index(this._hashes[hash]);if(position===undefined||position===this._core.current()){return}
this._core.to(this._core.relative(position),!1,!0)},this))};Hash.Defaults={URLhashListener:!1};Hash.prototype.destroy=function(){var handler,property;$(window).off('hashchange.owl.navigation');for(handler in this._handlers){this._core.$element.off(handler,this._handlers[handler])}
for(property in Object.getOwnPropertyNames(this)){typeof this[property]!='function'&&(this[property]=null)}};$.fn.owlCarousel.Constructor.Plugins.Hash=Hash})(window.Zepto||window.jQuery,window,document);(function($,window,document,undefined){var style=$('<support>').get(0).style,prefixes='Webkit Moz O ms'.split(' '),events={transition:{end:{WebkitTransition:'webkitTraFnsitionEnd',MozTransition:'transitionend',OTransition:'oTransitionEnd',transition:'transitionend'}},animation:{end:{WebkitAnimation:'webkitAnimationEnd',MozAnimation:'animationend',OAnimation:'oAnimationEnd',animation:'animationend'}}},tests={csstransforms:function(){return!!test('transform')},csstransforms3d:function(){return!!test('perspective')},csstransitions:function(){return!!test('transition')},cssanimations:function(){return!!test('animation')}};function test(property,prefixed){var result=!1,upper=property.charAt(0).toUpperCase()+property.slice(1);$.each((property+' '+prefixes.join(upper+' ')+upper).split(' '),function(i,property){if(style[property]!==undefined){result=prefixed?property:!0;return!1}});return result}
function prefixed(property){return test(property,!0)}
if(tests.csstransitions()){$.support.transition=new String(prefixed('transition'))
$.support.transition.end=events.transition.end[$.support.transition]}
if(tests.cssanimations()){$.support.animation=new String(prefixed('animation'))
$.support.animation.end=events.animation.end[$.support.animation]}
if(tests.csstransforms()){$.support.transform=new String(prefixed('transform'));$.support.transform3d=tests.csstransforms3d()}})(window.Zepto||window.jQuery,window,document)
        
        
       
</script>
<style>
ul{
  padding:0;
  list-style:none;
}
.heading.heading-icon {
    display: block;
}

.our-webcoderskull{
  background: #FFFFFF;
  
}
.our-webcoderskull .cnt-block{ 
   float:left; 
   width:100%; 
   background:#fff; 
   text-align:center; 
   border:2px solid #d5d5d5;
   margin: 0 0 28px;
}
.our-webcoderskull .cnt-block figure{
   width:100%; 
   height:148px; 
   border-radius:100%; 
}
.our-webcoderskull .cnt-block img{ 
   width:100%; 
   height:247px;
 
}

</style>
<style>

.projectFactsWrap{
    display: flex;
  margin-top: 30px;
  flex-direction: row;
  flex-wrap: wrap;
}


#projectFacts .fullWidth{
  padding: 0;
}

.projectFactsWrap .item{
  width: 25%;
  height: 100%;
  padding: 50px 0px;
  text-align: center;
}

.projectFactsWrap .item:nth-child(1){
  
}

.projectFactsWrap .item:nth-child(2){
 
}

.projectFactsWrap .item:nth-child(3){
 
}

.projectFactsWrap .item:nth-child(4){
  
}

.projectFactsWrap .item p.number{
  font-size: 40px;
  padding: 0;
  font-weight: bold;
}

.projectFactsWrap .item p{
  color: rgba(255, 255, 255, 0.8);
  font-size: 18px;
  margin: 0;
  padding: 10px;
  font-family: 'Open Sans';
}


.projectFactsWrap .item span{
  width: 60px;
  background: rgba(255, 255, 255, 0.8);
  height: 2px;
  display: block;
  margin: 0 auto;
}


.projectFactsWrap .item i{
  vertical-align: middle;
  font-size: 50px;
  color: rgba(255, 255, 255, 0.8);
}


.projectFactsWrap .item:hover i, .projectFactsWrap .item:hover p{
  color: white;
}

.projectFactsWrap .item:hover span{
  background: white;
}


</style>
<style>
.button3 {background-color: #f44336;}

.faa {
  padding: 5px;
  font-size: 20px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 10px;
}

.faa:hover {
    opacity: 1;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}


.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}




</style>
<style>

.cart-box{
  position: fixed;
  bottom: 50%;
  right: 30px;
  width: 48px;
  height: 48px;
  z-index: 2147483000;
  cursor: pointer;
  background-position: 50%;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
.btn-circle.btn-lg {
  width: 50px;
  height: 50px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 25px;
}
.btn-circle.btn-xl {
  width: 70px;
  height: 70px;
  padding: 10px 16px;
  font-size: 24px;
  line-height: 1.33;
  border-radius: 35px;
}
.cart-items-count{
    position:relative;
    display:flex;
    text-align:center;
    justify-content: center;
    top:-55px;
}

.notification-counter {   
    position: absolute;
    left: 8px;
    background-color: rgba(212, 19, 13, 1);
    color: #fff;
    border-radius: 3px;
    padding: 1px 3px;
    font: 8px Verdana;
}





</style>
<style>
body {
  font-family: 'Domine', serif;
}

.sidenav {
  height: 100%;
  width: 16.7%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #FFFFFF;
  overflow-x: hidden;
  padding-top: 50px;
}

.sidenav a {
  
  text-decoration: none;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #FFFFFF;
}

.main {
  margin-left: 15.5%; /* Same as the width of the sidenav */
  padding: 0px 0px;
}


@media only screen and (max-width: 500px) {
.sidenav {
  height: 100%;
  width: 0%!important;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #FFFFFF;
  overflow-x: hidden;
  padding-top: 50px;
}

.sidenav a {
  
 
}

.sidenav a:hover {
  color: #FFFFFF;
}

.main {
padding:0px;
margin:-20px;
}

}
</style>
<style>
*{margin:0;padding:0;text-decoration:none}
header{position:relative;width:100%;background:#fdd670;}
.logo{position:relative;z-index:123;padding:10px;font:18px verdana;color:#6DDB07;float:left;width:15%}
.logo a{color:#6DDB07;}
nav{position:relative;width:980px;margin:0 auto;}
#cssmenu,#cssmenu ul,#cssmenu ul li,#cssmenu ul li a,#cssmenu #head-mobile{border:0;list-style:none;line-height:1;display:block;position:relative;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
#cssmenu:after,#cssmenu > ul:after{content:".";display:block;clear:both;visibility:hidden;line-height:0;height:0}
#cssmenu #head-mobile{display:none}
#cssmenu{font-family:sans-serif;background:#fdd670}
#cssmenu > ul > li{float:left}
#cssmenu > ul > li > a{padding:17px;font-size:12px;letter-spacing:1px;text-decoration:none;color:#ddd;font-weight:700;}
#cssmenu > ul > li:hover > a,#cssmenu ul li.active a{color:#fff}
#cssmenu > ul > li:hover,#cssmenu ul li.active:hover,#cssmenu ul li.active,#cssmenu ul li.has-sub.active:hover{background:#448D00!important;-webkit-transition:background .3s ease;-ms-transition:background .3s ease;transition:background .3s ease;}
#cssmenu > ul > li.has-sub > a{padding-right:30px}
#cssmenu > ul > li.has-sub > a:after{position:absolute;top:22px;right:11px;width:8px;height:2px;display:block;background:#ddd;content:''}
#cssmenu > ul > li.has-sub > a:before{position:absolute;top:19px;right:14px;display:block;width:2px;height:8px;background:#ddd;content:'';-webkit-transition:all .25s ease;-ms-transition:all .25s ease;transition:all .25s ease}
#cssmenu > ul > li.has-sub:hover > a:before{top:23px;height:0}
#cssmenu ul ul{position:absolute;left:-9999px}
#cssmenu ul ul li{height:0;-webkit-transition:all .25s ease;-ms-transition:all .25s ease;background:#333;transition:all .25s ease}
#cssmenu ul ul li:hover{}
#cssmenu li:hover > ul{left:auto}
#cssmenu li:hover > ul > li{height:35px}
#cssmenu ul ul ul{margin-left:100%;top:0}
#cssmenu ul ul li a{border-bottom:1px solid rgba(150,150,150,0.15);padding:11px 15px;width:170px;font-size:12px;text-decoration:none;color:#ddd;font-weight:400;}
#cssmenu ul ul li:last-child > a,#cssmenu ul ul li.last-item > a{border-bottom:0}
#cssmenu ul ul li:hover > a,#cssmenu ul ul li a:hover{color:#fff}
#cssmenu ul ul li.has-sub > a:after{position:absolute;top:16px;right:11px;width:8px;height:2px;display:block;background:#ddd;content:''}
#cssmenu ul ul li.has-sub > a:before{position:absolute;top:13px;right:14px;display:block;width:2px;height:8px;background:#ddd;content:'';-webkit-transition:all .25s ease;-ms-transition:all .25s ease;transition:all .25s ease}
#cssmenu ul ul > li.has-sub:hover > a:before{top:17px;height:0}
#cssmenu ul ul li.has-sub:hover,#cssmenu ul li.has-sub ul li.has-sub ul li:hover{background:#363636;}
#cssmenu ul ul ul li.active a{border-left:1px solid #333}
#cssmenu > ul > li.has-sub > ul > li.active > a,#cssmenu > ul ul > li.has-sub > ul > li.active> a{border-top:1px solid #333}

@media screen and (max-width:500px){
.logo{position:absolute;top:0;left: 0;width:100%;height:46px;text-align:center;padding:10px 0 0 0 ;float:none}
.logo2{display:none}
nav{width:100%;}
#cssmenu{width:100%}
#cssmenu ul{width:100%;display:none}
#cssmenu ul li{width:100%;border-top:1px solid #444}
#cssmenu ul li:hover{background:#363636;}
#cssmenu ul ul li,#cssmenu li:hover > ul > li{height:auto}
#cssmenu ul li a,#cssmenu ul ul li a{width:100%;border-bottom:0}
#cssmenu > ul > li{float:none}
#cssmenu ul ul li a{padding-left:25px}
#cssmenu ul ul li{background:#333!important;}
#cssmenu ul ul li:hover{background:#363636!important}
#cssmenu ul ul ul li a{padding-left:35px}
#cssmenu ul ul li a{color:#ddd;background:none}
#cssmenu ul ul li:hover > a,#cssmenu ul ul li.active > a{color:#fff}
#cssmenu ul ul,#cssmenu ul ul ul{position:relative;left:0;width:100%;margin:0;text-align:left}
#cssmenu > ul > li.has-sub > a:after,#cssmenu > ul > li.has-sub > a:before,#cssmenu ul ul > li.has-sub > a:after,#cssmenu ul ul > li.has-sub > a:before{display:none}
#cssmenu #head-mobile{display:block;padding:23px;color:#000000;font-size:12px;font-weight:700}

.button{width:105px;height:46px;position:absolute;right:0;top:0;cursor:pointer;z-index: 12399994; color:#000000;}
.button:after{position:absolute;top:22px;right:20px;display:block;height:4px;width:20px;border-top:2px solid #000000;border-bottom:4px solid #000000;content:''}
.button:before{-webkit-transition:all .3s ease;-ms-transition:all .3s ease;transition:all .3s ease;position:absolute;top:16px;right:20px;display:block;height:2px;width:20px;background:#000000; color:#000000; content:''}
.button.menu-opened:after{-webkit-transition:all .3s ease;-ms-transition:all .3s ease;transition:all .3s ease;top:23px;border:0;height:2px;width:19px;background:#000000;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-ms-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg)}
.button.menu-opened:before{top:23px;background:#000000;width:19px;-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-ms-transform:rotate(-45deg);-o-transform:rotate(-45deg);transform:rotate(-45deg)}

#cssmenu .submenu-button{position:absolute;z-index:99;right:0;top:0;display:block;border-left:1px solid #444;height:46px;width:46px;cursor:pointer}
#cssmenu .submenu-button.submenu-opened{background:#262626}
#cssmenu ul ul .submenu-button{height:34px;width:34px}
#cssmenu .submenu-button:after{position:absolute;top:22px;right:19px;width:8px;height:2px;display:block;background:#ddd;content:''}
#cssmenu ul ul .submenu-button:after{top:15px;right:13px}
#cssmenu .submenu-button.submenu-opened:after{background:#fff}
#cssmenu .submenu-button:before{position:absolute;top:19px;right:22px;display:block;width:2px;height:8px;background:#ddd;content:''}
#cssmenu ul ul .submenu-button:before{top:12px;right:16px}
#cssmenu .submenu-button.submenu-opened:before{display:none}
#cssmenu ul ul ul li.active a{border-left:none}
#cssmenu > ul > li.has-sub > ul > li.active > a,#cssmenu > ul ul > li.has-sub > ul > li.active > a{border-top:none}
}
</style>
<script>
(function($) {
$.fn.menumaker = function(options) {  
 var cssmenu = $(this), settings = $.extend({
   format: "dropdown",
   sticky: false
 }, options);
 return this.each(function() {
   $(this).find(".button").on('click', function(){
     $(this).toggleClass('menu-opened');
     var mainmenu = $(this).next('ul');
     if (mainmenu.hasClass('open')) { 
       mainmenu.slideToggle().removeClass('open');
     }
     else {
       mainmenu.slideToggle().addClass('open');
       if (settings.format === "dropdown") {
         mainmenu.find('ul').show();
       }
     }
   });
   cssmenu.find('li ul').parent().addClass('has-sub');
multiTg = function() {
     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
     cssmenu.find('.submenu-button').on('click', function() {
       $(this).toggleClass('submenu-opened');
       if ($(this).siblings('ul').hasClass('open')) {
         $(this).siblings('ul').removeClass('open').slideToggle();
       }
       else {
         $(this).siblings('ul').addClass('open').slideToggle();
       }
     });
   };
   if (settings.format === 'multitoggle') multiTg();
   else cssmenu.addClass('dropdown');
   if (settings.sticky === true) cssmenu.css('position', 'fixed');
resizeFix = function() {
  var mediasize = 1000;
     if ($( window ).width() > mediasize) {
       cssmenu.find('ul').show();
     }
     if ($(window).width() <= mediasize) {
       cssmenu.find('ul').hide().removeClass('open');
     }
   };
   resizeFix();
   return $(window).on('resize', resizeFix);
 });
  };
})(jQuery);

(function($){
$(document).ready(function(){
$("#cssmenu").menumaker({
   format: "multitoggle"
});
});
})(jQuery);


</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>