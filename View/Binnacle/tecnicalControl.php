<!DOCTYPE HTML PUBLIC "-//WC//DTD HTML 4.01 Frameset//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=Cp1353">
        <title>Insert title here</title>
        <script type="text/javascript" src="../../js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../js/functions.js"></script>
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/bootstrap-theme.css">
        <link rel="stylesheet" href="../../css/font-awesome.css">
        <link href="../../Libs/PhotoSwipe/dist/photoswipe.css" rel="stylesheet" type="text/css"/>
        <link href="../../Libs/PhotoSwipe/dist/default-skin/default-skin.css" rel="stylesheet" type="text/css"/>
        <script src="../../Libs/PhotoSwipe/dist/photoswipe.min.js" type="text/javascript"></script>
        <script src="../../Libs/PhotoSwipe/dist/photoswipe-ui-default.min.js" type="text/javascript"></script>
        <style>
            .tabs{
                color:black;
                border: #65646D;
            }
            .label-col{
                background-color:#01DF01; 
                color:white;
                border: 1px solid #585858;
            }
            .data-col{
                padding-left: 5px;
                background-color: #E6E6E6;
                color: black;
                border: 1px solid #585858;
            }
            .header-info{
                text-align: center;
                background-color: #CF30CF;
                border: 1px solid #585858;
                color: white;
            }
            .margin-top-table{
                margin-top: 20px;                
            }
            .img-rims{
                width: 60px;
                height: 60px;                
            }
            .margin-bottom-10px{
                margin-bottom: 10px;
            }

        </style>
        <script type="text/javascript" src="../../js/Binnacle/tecnicalControl.js"></script>
    </head>

    <body style="background-color: rgba(0, 0, 0, 0.0)">


        <fieldset>
            <form class="form-horizontal" id="form-inspection" enctype="multipart/form-data" action="#">
                <legend>
                    <h3>
                        CONTROL TECNICO
                    </h3>
                </legend>

                <div id="content">
                    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                        <li class="active"><a href="#info" class="tabs" data-toggle="tab"><i class="fa fa-car" aria-hidden="true"></i> General</a></li>
                        <li><a href="#bodywork" class="tabs" data-toggle="tab"><i class="fa fa-code-fork" aria-hidden="true"></i> Carroceria</a></li>
                        <li><a href="#electric-team" class="tabs" data-toggle="tab"><i class="fa fa-bolt" aria-hidden="true"></i> Equipo Electrico</a></li>
                        <li><a href="#fluids" class="tabs" data-toggle="tab"><i class="fa fa-tint" aria-hidden="true"></i> Fluidos</a></li>
                        <li><a href="#glasses" class="tabs" data-toggle="tab"><i class="fa fa-square-o" aria-hidden="true"></i> Vidrios</a></li>
                        <li><a href="#interior" class="tabs" data-toggle="tab"><i class="fa fa-sign-in" aria-hidden="true"></i> Interiores</a></li>
                        <li><a href="#leakage" class="tabs" data-toggle="tab"><i class="fa fa-fire" aria-hidden="true"></i> Fugas</a></li>
                        <li><a href="#paint" class="tabs" data-toggle="tab"><i class="fa fa-paint-brush" aria-hidden="true"></i> Pintura</a></li>
                        <li><a href="#ligth" class="tabs" data-toggle="tab"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Luces</a></li>
                        <li><a href="#rims" class="tabs" data-toggle="tab"><i class="fa fa-circle-o-notch" aria-hidden="true"></i> Llantas</a></li>
                        <li><a href="#structure" class="tabs" data-toggle="tab"><i class="fa fa-cogs" aria-hidden="true"></i> Estructura</a></li>
                        <li><a href="#pictures" class="tabs" data-toggle="tab"><i class="fa fa-camera-retro" aria-hidden="true"></i> Fotos</a></li>                        
                    </ul>
                    <div id="my-tab-content" class="tab-content">
                        <div class="tab-pane active" id="info">
                            <legend><i class="fa fa-car" aria-hidden="true"></i> General</legend>
                        </div>
                        <div class="tab-pane" id="bodywork">
                            <legend><i class="fa fa-code-fork" aria-hidden="true"></i> Carroceria</legend>

                        </div>
                        <div class="tab-pane" id="electric-team">
                            <legend><i class="fa fa-bolt" aria-hidden="true"></i> Equipo Electrico</legend>

                        </div>
                        <div class="tab-pane" id="fluids">
                            <legend><i class="fa fa-tint" aria-hidden="true"></i> Fluidos</legend>

                        </div>
                        <div class="tab-pane" id="glasses">
                            <legend><i class="fa fa-square-o" aria-hidden="true"></i> Vidrios</legend>

                        </div>
                        <div class="tab-pane" id="interior">
                            <legend><i class="fa fa-sign-in" aria-hidden="true"></i> Interiores</legend>

                        </div>
                        <div class="tab-pane" id="leakage">
                            <legend><i class="fa fa-fire" aria-hidden="true"></i> Fugas</legend>

                        </div>
                        <div class="tab-pane" id="paint">
                            <legend><i class="fa fa-paint-brush" aria-hidden="true"></i> Pintura</legend>

                        </div>
                        <div class="tab-pane" id="ligth">
                            <legend><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Pintura</legend>

                        </div>
                        <div class="tab-pane" id="rims">
                            <legend><i class="fa fa-circle-o-notch" aria-hidden="true"></i> Llantas</legend> 


                        </div>
                        <div class="tab-pane" id="structure">
                            <legend><i class="fa fa-cogs" aria-hidden="true"></i> Estructura</legend>
                            <div class="col-md-3"></div>
                            <div class="col-md-6"><img id="vehicle-picture" name='' class="img-responsive"/></div>
                            <div class="col-md-3"></div>
                        </div>
                        <div class="tab-pane" id="pictures">
                            <legend><i class="fa fa-camera-retro" aria-hidden="true"></i> Fotos</legend>

                            <h2>Fotos del vehiculo</h2>
                            <div class="my-gallery" itemscope id="picture-vehicle" itemtype="http://schema.org/ImageGallery">
                            </div>

                            <h2>Systemas de identificacion</h2>
                            <div class="my-gallery" id="picture-system" itemscope itemtype="http://schema.org/ImageGallery">
                            </div>



                            <!-- Root element of PhotoSwipe. Must have class pswp. -->
                            <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                                <!-- Background of PhotoSwipe. 
                                     It's a separate element, as animating opacity is faster than rgba(). -->
                                <div class="pswp__bg"></div>

                                <!-- Slides wrapper with overflow:hidden. -->
                                <div class="pswp__scroll-wrap">

                                    <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                                    <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                                    <div class="pswp__container">
                                        <div class="pswp__item"></div>
                                        <div class="pswp__item"></div>
                                        <div class="pswp__item"></div>
                                    </div>

                                    <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                                    <div class="pswp__ui pswp__ui--hidden">

                                        <div class="pswp__top-bar">

                                            <!--  Controls are self-explanatory. Order can be changed. -->

                                            <div class="pswp__counter"></div>

                                            <button class="pswp__button pswp__button--close" id="close" title="Close (Esc)"></button>

                                            <!--                                            <button class="pswp__button pswp__button--share" title="Share"></button>
                                            
                                                                                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                            
                                                                                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>-->

                                            <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                                            <!-- element will get class pswp__preloader--active when preloader is running -->
                                            <div class="pswp__preloader">
                                                <div class="pswp__preloader__icn">
                                                    <div class="pswp__preloader__cut">
                                                        <div class="pswp__preloader__donut"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                            <div class="pswp__share-tooltip"></div> 
                                        </div>

                                        <button class="pswp__button pswp__button--arrow--left" id="prev" title="Previous (arrow left)">
                                        </button>

                                        <button class="pswp__button pswp__button--arrow--right" id="next" title="Next (arrow right)">
                                        </button>

                                        <div class="pswp__caption">
                                            <div class="pswp__caption__center"></div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <style>
                                .my-gallery {
                                    width: 100%;
                                    float: left;
                                }
                                .my-gallery img {
                                    width: 100%;
                                    height: auto;
                                }
                                .my-gallery figure {
                                    display: block;
                                    float: left;
                                    margin: 0 5px 5px 0;
                                    width: 150px;
                                }
                                .my-gallery figcaption {
                                    display: none;
                                }
                            </style>
                            <script>
                                var initPhotoSwipeFromDOM = function (gallerySelector) {

                                    // parse slide data (url, title, size ...) from DOM elements 
                                    // (children of gallerySelector)
                                    var parseThumbnailElements = function (el) {
                                        var thumbElements = el.childNodes,
                                                numNodes = thumbElements.length,
                                                items = [],
                                                figureEl,
                                                linkEl,
                                                size,
                                                item;

                                        for (var i = 0; i < numNodes; i++) {

                                            figureEl = thumbElements[i]; // <figure> element

                                            // include only element nodes 
                                            if (figureEl.nodeType !== 1) {
                                                continue;
                                            }

                                            linkEl = figureEl.children[0]; // <a> element

                                            size = linkEl.getAttribute('data-size').split('x');

                                            // create slide object
                                            item = {
                                                src: linkEl.getAttribute('href'),
                                                w: parseInt(size[0], 10),
                                                h: parseInt(size[1], 10)
                                            };



                                            if (figureEl.children.length > 1) {
                                                // <figcaption> content
                                                item.title = figureEl.children[1].innerHTML;
                                            }

                                            if (linkEl.children.length > 0) {
                                                // <img> thumbnail element, retrieving thumbnail url
                                                item.msrc = linkEl.children[0].getAttribute('src');
                                            }

                                            item.el = figureEl; // save link to element for getThumbBoundsFn
                                            items.push(item);
                                        }

                                        return items;
                                    };

                                    // find nearest parent element
                                    var closest = function closest(el, fn) {
                                        return el && (fn(el) ? el : closest(el.parentNode, fn));
                                    };

                                    // triggers when user clicks on thumbnail
                                    var onThumbnailsClick = function (e) {
                                        e = e || window.event;
                                        e.preventDefault ? e.preventDefault() : e.returnValue = false;

                                        var eTarget = e.target || e.srcElement;

                                        // find root element of slide
                                        var clickedListItem = closest(eTarget, function (el) {
                                            return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
                                        });

                                        if (!clickedListItem) {
                                            return;
                                        }

                                        // find index of clicked item by looping through all child nodes
                                        // alternatively, you may define index via data- attribute
                                        var clickedGallery = clickedListItem.parentNode,
                                                childNodes = clickedListItem.parentNode.childNodes,
                                                numChildNodes = childNodes.length,
                                                nodeIndex = 0,
                                                index;

                                        for (var i = 0; i < numChildNodes; i++) {
                                            if (childNodes[i].nodeType !== 1) {
                                                continue;
                                            }

                                            if (childNodes[i] === clickedListItem) {
                                                index = nodeIndex;
                                                break;
                                            }
                                            nodeIndex++;
                                        }



                                        if (index >= 0) {
                                            // open PhotoSwipe if valid index found
                                            openPhotoSwipe(index, clickedGallery);
                                        }
                                        return false;
                                    };

                                    // parse picture index and gallery index from URL (#&pid=1&gid=2)
                                    var photoswipeParseHash = function () {
                                        var hash = window.location.hash.substring(1),
                                                params = {};

                                        if (hash.length < 5) {
                                            return params;
                                        }

                                        var vars = hash.split('&');
                                        for (var i = 0; i < vars.length; i++) {
                                            if (!vars[i]) {
                                                continue;
                                            }
                                            var pair = vars[i].split('=');
                                            if (pair.length < 2) {
                                                continue;
                                            }
                                            params[pair[0]] = pair[1];
                                        }

                                        if (params.gid) {
                                            params.gid = parseInt(params.gid, 10);
                                        }

                                        return params;
                                    };

                                    var openPhotoSwipe = function (index, galleryElement, disableAnimation, fromURL) {
                                        var pswpElement = document.querySelectorAll('.pswp')[0],
                                                gallery,
                                                options,
                                                items;

                                        items = parseThumbnailElements(galleryElement);

                                        // define options (if needed)
                                        options = {
                                            // define gallery index (for URL)
                                            galleryUID: galleryElement.getAttribute('data-pswp-uid'),
                                            getThumbBoundsFn: function (index) {
                                                // See Options -> getThumbBoundsFn section of documentation for more info
                                                var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                                                        pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                                                        rect = thumbnail.getBoundingClientRect();

                                                return {x: rect.left, y: rect.top + pageYScroll, w: rect.width};
                                            }

                                        };

                                        // PhotoSwipe opened from URL
                                        if (fromURL) {
                                            if (options.galleryPIDs) {
                                                // parse real index when custom PIDs are used 
                                                // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                                                for (var j = 0; j < items.length; j++) {
                                                    if (items[j].pid == index) {
                                                        options.index = j;
                                                        break;
                                                    }
                                                }
                                            } else {
                                                // in URL indexes start from 1
                                                options.index = parseInt(index, 10) - 1;
                                            }
                                        } else {
                                            options.index = parseInt(index, 10);
                                        }

                                        // exit if index not found
                                        if (isNaN(options.index)) {
                                            return;
                                        }

                                        if (disableAnimation) {
                                            options.showAnimationDuration = 0;
                                        }

                                        // Pass data to PhotoSwipe and initialize it
                                        gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
                                        gallery.init();
                                    };

                                    // loop through all gallery elements and bind events
                                    var galleryElements = document.querySelectorAll(gallerySelector);

                                    for (var i = 0, l = galleryElements.length; i < l; i++) {
                                        galleryElements[i].setAttribute('data-pswp-uid', i + 1);
                                        galleryElements[i].onclick = onThumbnailsClick;
                                    }

                                    // Parse URL and open gallery if it contains #&pid=3&gid=1
                                    var hashData = photoswipeParseHash();
                                    if (hashData.pid && hashData.gid) {
                                        openPhotoSwipe(hashData.pid, galleryElements[ hashData.gid - 1 ], true, true);
                                    }
                                };

// execute above function
                                initPhotoSwipeFromDOM('.my-gallery');
                            </script>
                        </div>
                    </div>
                </div>                    

            </form>
        </fieldset>

    </body>

</html>