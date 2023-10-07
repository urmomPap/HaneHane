              //remaing field to click
            var i = 8;
            //its the bot value.for example, when numer_bota is 5, bot click box nr.5
            var liczba_bota;
            //this table have information about clicked fields
            var tab = new Array();
            // you need this table, to make operation on fields: disable box itp...
            var pola = document.getElementsByClassName("pole");
//restart game 
            function reset(){
                window.location.reload(true);
            }
            //your turn
            function ruch(mi){
                //here you change color of field, and saving date about clicked fields 
                document.getElementById("button"+mi).disabled = true;
                pola[mi].style = "background-image: url('img/cross.png'); background-size: cover;";
                tab[mi] = i%2;
                i--;
                //if you ave clickied correct fields, you are win
                if(tab[0]==0 & tab[1]==0 &tab[2]==0||//pole 1,2,3
                tab[3]==0 & tab[4]==0 &tab[5]==0|| //pole 4,5,6
                tab[6]==0 & tab[7]==0 &tab[8]==0|| //pole 7,8,9
                tab[0]==0 & tab[3]==0 &tab[6]==0|| //pole 1,4,7
                tab[1]==0 & tab[4]==0 &tab[7]==0||
                tab[2]==0 & tab[5]==0 &tab[8]==0||
                tab[0]==0 & tab[4]==0 &tab[8]==0||
                tab[2]==0 & tab[4]==0 &tab[6]==0){
                    //if you win, remaing fields are disabled, and you can't click this, red wins!
                    for(var j=0; j<=8; j++){
                        document.getElementById("button"+j).disabled = true;
                    }

                    document.getElementById("wynik").innerHTML = "Player wins!";
                    return 0;
                }
                //if remaing fields is bigger than 0, bot can make turn
                if(i>0){
                    while(true){
                        //if randomed number isn't clicked before, bot use this
                        liczba_bota = (Math.floor(Math.random()*9+0));
                        if( document.getElementById("button"+liczba_bota).disabled == false){
                            break;
                        } 
                    }
                    //saving information about bot clicked fields
                    tab[liczba_bota] = i%2;
                    i--;
                    document.getElementById("button"+liczba_bota).disabled = true;
                    pola[liczba_bota].style = "background-image: url('img/circle.png'); background-size: cover;";
                }else{
                    document.getElementById("wynik").innerHTML = "Draw!";
                }
            //here you change color of field, and saving date about clicked fields 
            if(
                tab[0]==1 & tab[1]==1 &tab[2]==1|| //pole 1,2,3
                tab[3]==1 & tab[4]==1 &tab[5]==1|| //pole 4,5,6
                tab[6]==1 & tab[7]==1 &tab[8]==1|| //pole 7,8,9
                tab[0]==1 & tab[3]==1 &tab[6]==1|| //pole 1,4,7
                tab[1]==1 & tab[4]==1 &tab[7]==1||
                tab[2]==1 & tab[5]==1 &tab[8]==1||
                tab[0]==1 & tab[4]==1 &tab[8]==1||
                tab[2]==1 & tab[4]==1 &tab[6]==1  )//pole 3,5,7 
                {

                for(var j=0; j<=8; j++){
                    document.getElementById("button"+j).disabled = true;
                }
            document.getElementById("wynik").innerHTML = "Bot wins!";
            }

           

            } 
