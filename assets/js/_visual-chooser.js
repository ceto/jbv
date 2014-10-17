/********* Visual Choser Part ********/

if ( $('.visual-chooser').length > 0 ) {
    var szelesseg = $('.visual-chooser').width();
    var origwidth=1920;
    var origheight=1080;
    var paper = new Raphael(document.getElementById('visual-chooser'), origwidth, origheight);
    var origratio=origheight/origwidth;
}

function redraw_canvas() {

  paper.clear();
  szelesseg = $('.visual-chooser').width();
  magassag = $('.visual-chooser').height();

  paper.setSize(szelesseg, szelesseg*origratio);
  paper.setViewBox(0, 0, origwidth, origheight, true);

  var items = [];
  var text ='';

  $('.datarow--link').each(function(index) {
    var menuitem = $(this);

    items[index] = paper.path(menuitem.attr('data-svg'));

            
    items[index].node.id = 'v' +  menuitem.attr('id');


    if ( menuitem.attr('data-state')==='fri' ) {
      text="<h3>"+menuitem.attr('data-name')+"</h3><p>Område: "+menuitem.attr('data-omr')+",<br>Pris: "+menuitem.attr('data-pris')+"</p>";
    } else {
      if ( menuitem.attr('data-state')==='utsolgt' ) {
        text="Utsolgt";
      } else {
        text=menuitem.attr('data-name');
      }
    }

    items[index].attr(
      {
       
        fill: (menuitem.attr('data-state')==='fri')?'#4AB84A':(menuitem.attr('data-state')==='utsolgt')?'#A71D3E':'#FF9900',
        opacity: 0,
        stroke: 'transparent',
        href:$(this).attr('data-url'),
        //title: text

      }
    );
    

    items[index].data('data-id', menuitem.attr('id'));
    
    //items[index].data('url', $(this).attr('data-url'));

    
   
    items[index].click(function () {
        window.location=(items[index].data('url'));
    });


    items[index].hover(
      function(event){
        items[index].attr(
        {
          opacity: 0.5,
        });
        menuitem.toggleClass('active');
      },
      function(){
        items[index].attr(
        {
          opacity: 0,
        });
        menuitem.toggleClass('active');
      }
    );

    menuitem.hover(
      function(){
        items[index].attr(
        {
          opacity: 0.5,
        });
      },
      function(){
          items[index].attr(
          {
            opacity: 0,
          });
      }
    );


  });
}


jQuery(document).ready(function() {
  
  if ( $('.visual-chooser').length > 0 ) {
    redraw_canvas();
    $(window).resize(redraw_canvas);
  }
});