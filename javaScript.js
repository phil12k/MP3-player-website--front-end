function showPassword()
{
    var temp = document.getElementById("userPassword") ;
    temp.type="text" ;
    temp.innerHTML = temp.value ;
}

function checkShowPassword()
{
    var node = document.getElementById("show_password") ;
    if (node.checked)
    {
        showPassword() ;
    }

    else
    {
        var temp = document.getElementById("userPassword") ;
        temp.type="password" ;

    }
}


function play(id)
{
    document.getElementById(id).style.height = "65px" ;
    var x =document.getElementById(id).children[0] ;
    document.getElementById(id).style.color = "chartreuse" ;
    x.controls = "controls" ;
    x.play() ;
}

function pause(id)
{
    document.getElementById(id).style.height = "10px" ;
    var x =document.getElementById(id).children[0] ;
    document.getElementById(id).style.color = "white" ;
    x.controls = ""
    x.pause() ;

}

function playWhileOtherIsAlsoPlaying(id)
{
    var x = document.getElementById("songslist").children ;
    for(var i=1 ; i <= x.length ; i++)
    {
        pause(i) ;
    }

    
    play(id);
}


function playAll(id)
{
    var pauseAll = document.getElementById("songslist").children ;
    for(var i=1 ; i <= pauseAll.length ; i++)
    {
        pause(i) ;
    }

    document.getElementById(id).innerHTML = "Pause Album" ;
    var index=1 ;
    var x = document.getElementById("songslist").children ;
    var toplay =document.getElementById(index).children[0] ;
    document.getElementById(index).style.color = "chartreuse" ;
    toplay.play() ;

   for(var temp=2 ; temp<=x.length ; temp++)
   { 
        toplay.onended =  function()      
            {
                pause(index);
                index++ ;
                if(index>x.length)
                {
                    return ;
                }
                else
                {
                    var toplay=document.getElementById(index).children[0] ;
                    document.getElementById(index).style.color = "chartreuse" ;
                    toplay.play() ;
                }
                
            }
    
    }

}


function pauseAll(id)
{
    document.getElementById(id).innerHTML = "Play Album" ;
    var x = document.getElementById("songslist").children.length;
    for(var temp=1 ; temp<= x ; temp++)
    {
        pause(temp);
    }    
}



function searchSong() { 
    let input = document.getElementById('searchbar').value 
    input=input.toLowerCase(); 
    let x = document.getElementsByClassName('songs'); 
      
    for (i = 0; i < x.length; i++) {  
        if (!x[i].innerHTML.toLowerCase().includes(input)) { 
            x[i].style.display="none"; 
        } 
        else { 
            x[i].style.display="list-item";                  
        } 
    } 
} 


function justcheck()
{
    console.log(document.getElementById("1next")) ;
}