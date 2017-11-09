<div id="slideshow">

    <div>
        <img src="Images/TwinPeaks.jpg" alt="BCS"/>
    </div>
    <div>
        <img src="Images/Django.jpeg" alt=""/>
    </div>
    <div>
        <img src="Images/Fargo.jpg" alt=""/>
    </div>
    <div>
        <img src="Images/GOT.jpeg" alt=""/>
    </div>
    <div>
        <img src="Images/MadMaxFR.jpg" alt=""/>
    </div>
    <div>
        <img src="Images/StarWarsFA.jpg" alt=""/>
    </div>
    <div>
        <img src="Images/BCS.jpg" alt=""/>
    </div>
    <div>
        <img src="Images/SingStreet.jpeg" alt=""/>
    </div>

</div>

<script>
    $("#slideshow > div:gt(0)").hide();//Hiding all images with an index greater than 0 i.e all but the first

    setInterval(function () {//
        $('#slideshow > div:first')// the first child of the slideshow
                .fadeOut(1000) //fade it out at 1000ms speed
                .next()//next child of the slideshow
                .fadeIn(1000)//fadeIn the next img at 1000ms speed
                .end() //end current slide
                .appendTo('#slideshow'); //appending to slideshow when finished
    }, 3000);//each slide last 3 secs

</script>
