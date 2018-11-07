$(document).ready(function(){
    var i;
  
    $("#catLink").click(function(){
        scrollTo($("#myCat"));
    })
    $("#ajouter").click(function(){
        alert("plus")
    })
    $("#diminuer").click(function(){
        alert("moins")
    })

    //after ittem "+i+"'
    for(i=1; i<=12;i++){
        //console.log("<div class='item"+i+"'"+"><h4>"+i+"</h4></div>")
        $('.cat-list').append("<div class='item-list' id='item-list"+i+"'"+"><h4><a href='maPage.php'><span class='fa fa-eye'></span></a></h4></div>");
        $("#item-list"+i).css("background-image", "url('images/img"+i+".jpg')");
        // $(".details").append("Les details<span class='elements'><span class='fa fa-thumbs-up'>&nbsp120</span><span class='fa fa-star'>&nbsp10</span></span>")
    }

    function setItemBehaviour(curentItem){
       
    }

    function resetItemBehaviour(item){
       
    }

    // $('.catalogue .owl-carousel .item-list').mouseenter(function(){
    //     setItemBehaviour(this)        
    // })
    // $('.catalogue .owl-carousel .item-list').mouseleave(function(){
    //     resetItemBehaviour(this) 
    // })
    $(".cat-list").owlCarousel({
        navigation : true,
        items : 3,
    });
    $("#s1").owlCarousel({
        loop:true,
        nav:true,
        margin:10,
        dots:false,
        items:1,
        autoplay:true,
        deltaY:5000
    });
    
//     $('#example').tooltip({
//         animation: true,
//         html: true,
//         placement: 'bottom'
//     });
});

function scrollTo( target ) {
    if( target.length ) {
        $("html, body").animate( 
            { scrollTop: target.offset().top }
            , 1500
        );
    }
}

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}