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

            
    items[index].node.id = menuitem.attr('id');

    if ( menuitem.attr('data-state')==='fri' ) {
      text='Nr.: '+menuitem.attr('data-name')+"\nGröße: "+menuitem.attr('data-size')+"m2,\nPris: "+menuitem.attr('data-price');
    } else {
      if ( menuitem.attr('data-status')==='utsolgt' ) {
        text="Utsolgt";
      } else {
        text=menuitem.attr('data-name');
      }
    }

    items[index].attr(
      {
       
        fill: (menuitem.attr('data-state')==='fri')?'#00FF00':(menuitem.attr('data-state')==='utsolgt')?'#A71D3E':'transparent',
        opacity: 0,
        stroke: 'transparent',
        "stroke-width": 1,
        //title: text

      }
    );
    


    items[index].data('url', $(this).attr('data-url'));

    
    if (menuitem.attr('data-state')!=='utsolgt') {

      items[index].click(function () {
        window.location=(items[index].data('url'));
      });

    
      items[index].node.onmousemove = function(event){
        var tooltipX = event.pageX - 8;
        var tooltipY = event.pageY + 8;
        $('div.tooltip').css({top: tooltipY, left: tooltipX});
      };

      items[index].node.onmouseenter = function(event){
        this.style.cursor = 'pointer';
        $('div.tooltip').remove();
        $('<div class="tooltip">'+
              '<h3>'+menuitem.attr('data-name')+'</h3>'+
              '<p>'+
              '<span class="omr">Größe: '+menuitem.attr('data-omr')+' m<sup>2</sup></span><br/>'+
              '<span class="pris">Pris: '+menuitem.attr('data-pris')+'</span>'+
              '</p>'+
              '</div>').appendTo('body');
        var tooltipX = event.pageX - 8;
        var tooltipY = event.pageY + 8;
        $('div.tooltip').css({top: tooltipY, left: tooltipX});

      };

      items[index].node.onmouseleave = function(event){
        $('div.tooltip').remove();

      };

    }

    items[index].hover(
      function(event){
        items[index].attr(
        {
          opacity: 0.43,
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
          opacity: 0.43,
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

