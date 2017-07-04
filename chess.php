<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="/Scripts/jquery-3.2.1.min.js"></script>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
        <script>
            $(document).ready(function () {
                $("#button").click(function () {
                    var div = $("div:last");
                    var offset = div.offset();
                    alert("sol: " + offset.left + ", üst: " + offset.top);
                    var deger = $("#t1").val();
                    alert(deger);
                });
                 
                   $("*").click(function (event) {
                    if (!$(event.target).is("#SatrancTahta")) 
                    {
                         $(document).click(function () {
                         var _top = event.pageY;
                         var _left = event.PageX;
                         $('img').mousedown(function(){
                         $(this).animate({
                         top: _top - 10,
                         left: _left
                         }, 2000);
                         });
                         });   
                    }
                    else 
                    {                          
                        alert("Pencere dışına tıklandı.");
                        return false; 
                    };
                });
            });
 
            /*$(document).click(function () {
            var _top = event.pageY
            var _left = event.PageX
            if (_top > 8 && _left > 600) {
            alert();
            }
            else {
            $('#s_vezir').animate({
            top: _top - 10,
            left: _left
            }, 2000);
            }
            });*/
            </script>
 
        <meta charset="utf-8" />
        <title></title>
        <style>
            ul li 
            {
                float:left; 
                margin-right:25px;  
            }
           ul 
            {
             list-style: none outside none;
             padding:0;
             margin:0;
             list-style:none;        
              }
            .s_piyon {
                position: absolute;
                display: inline;
                top: 80px;
                margin-left: 55px;
            }
            .b_piyon {
                position: absolute;
                display: inline;
                bottom: 140px;
                margin-left: 55px;
            }
            .s_kale { 
                position: absolute;
                display: inline;
                top:25px;
                margin-left: 55px;
            }
            #s_kalesag{
                padding-left: 340px;
            }
            .b_kale { 
                position: absolute;
                display: inline;
                bottom:85px;
                margin-left: 55px;
            }
            #b_kalesag{
                padding-left: 340px;
            }
            .s_at { 
                position: absolute;
                display: inline;
                top:25px;
                margin-left: 115px;
            }
            #s_atsag{
                padding-left: 220px;
            }
            .b_at { 
                position: absolute;
                display: inline;
                bottom:85px;
                margin-left: 115px;
            }
            #b_atsag{
                padding-left: 220px;
            }
            .s_fil { 
                position: absolute;
                display: inline;
                top:25px;
                margin-left: 175px;
            }
            #s_filsag {
                padding-left: 112px;
            }
            .b_fil { 
                position: absolute;
                display: inline;
                bottom:85px;
                margin-left: 175px;
            }
            #b_filsag {
                padding-left: 112px;
            }
             #s_vezir{
                position: absolute;
                display: inline;
                top:25px;
                margin-left: 230px;
            }
            #s_sah{
                position: absolute;
                display: inline;
                top:25px;
                margin-left: 285px;
            }
            #b_vezir{
                position: absolute;
                display: inline;
                bottom:88px;
                margin-left: 230px;
            }
            #b_sah{
                position: absolute;
                display: inline;
                bottom:88px;
                margin-left: 285px;
            }
            #konum1
            {
                position: absolute;
                display: inline;
                margin-left: 600px;
                bottom: 400px;
            }
            #konum2
            {
                position: absolute;
                display: inline;
                margin-left: 600px;
                bottom: 350px;
            }
            #button
            {
                width:150px;
                height: 30px;
                position: absolute;
                display: inline;
                margin-left: 700px;
                bottom: 300px;
            }
            #t1
            {
                width:150px;
                height: 30px;
                position: absolute;
                display: inline;
                margin-left: 700px;
                bottom: 400px;  
            }
            #t2
            {
                width:150px;
                height: 30px;
                position: absolute;
                display: inline;
                margin-left: 700px;
                bottom: 350px;  
            }
        </style>
    </head>
    <body>        
        <div id="SatrancTahta">
            
            <?php
                        echo "<table border='5px' width='500px' height='500px'>";//1px çizgi kalınlığında 300px genişlikte 300px yükseklikte bir tablo oluşturuluyor
                            $arrayRakam=array();
                            $arrayHarf=array();
                            $newArray=array();
                            for($satir=1; $satir<10; $satir++)//9 satırlık tablo oluşturuluyor
                            {
                                echo "<tr>";//satır oluşturuluyor.
                                for($sut = 1; $sut<10; $sut++)
                                 {
                                  
                                   echo "<td bgcolor = '";                                 
                                   $arrayRakam[$sut-1]=$sut;
                                    if($sut==1 && $satir<9)//sut değeri 1'e eşitse ve satır değeride 9'dan küçük ise;
                                    {
                                        echo "#CCCC99'> ".(9-$satir);//9'dan satır değeri çıkartılır yazılır.
                                    }              
                                    else if ($satir == 9 && $sut>=1)//eğer satır değeri 9'a eşitse ve sut değeri 1'den büyükse;
                                    {
                                        $donustur=chr(63+$sut);
                                        if($donustur=='@')
                                        {
                                            $donustur=NULL;
                                        } 
                                        $arrayHarf[$sut-1]=$donustur;
                                        echo "#CCCC99'>".$donustur;//sut değeriyle 63 sayısını toplar karakter karşılığını yazar. chr ascii dönüşümü yapar                                                 
                                    }                
                                    else
                                    {
                                        if (($satir + $sut) % 2 == 0)//satır ve sutun değerlerini toplar 2'ye göre modunu alır eğer 0'a eşitse;                                      
                                            {
                                              echo "#FFFF00'";//lacivert tonunda bir arkaplan rengi
 
                                            }
                                        else
                                        {
                                             echo "#000099'";//sarı tonunda arkaplan rengi
                                        }
                                        $sat=9-$satir;
                                        $donustur=chr(63+$sut);
                                        //echo ">$donustur$sat";
                                    }
                                    echo "</td>";//açılan sutün kapatılıyor
                                }
                                echo "</tr>";//oluşturulan satır kapatılıyor
                            }
                            echo "<table/>";//tablo kapatılıyor                          
                                            
                            /*for ($i=0; $i<9;$i++)
                            {
                                   for ($j=0;$j<8;$j++){
                                                                          
                                    if($arrayHarf[$i] == NULL )
                                    {
                                        continue;
                                    }
                                    else{
                                    $eleman="$arrayHarf[$i]$arrayRakam[$j]";
                                    $newArray[]=$eleman; 
                                    }
                                  }
                            }                                 
 
                            for($i=0; $i<64; $i++){
                                echo "$newArray[$i]";
                                echo "<br />";
                            }*/
 
            ?>
        </div>
        <ul class="s_piyon">
            <li><img src="/Taslar/9.gif" alt="Piyon" height="30px" width="30px" ></li>
            <li><img src="/Taslar/9.gif" alt="Piyon" height="30px" width="30px" ></li>
            <li><img src="/Taslar/9.gif" alt="Piyon" height="30px" width="30px" ></li>
            <li><img src="/Taslar/9.gif" alt="Piyon" height="30px" width="30px" ></li>
            <li><img src="/Taslar/9.gif" alt="Piyon" height="30px" width="30px" ></li>
            <li><img src="/Taslar/9.gif" alt="Piyon" height="30px" width="30px" ></li>
            <li><img src="/Taslar/9.gif" alt="Piyon" height="30px" width="30px" ></li>
            <li><img src="/Taslar/9.gif" alt="Piyon" height="30px" width="30px" ></li>
        </ul>
 
        <ul class="s_kale">
            <li><img src="/Taslar/10.gif" alt="Piyon" height="30px" width="30px"  ></li>
            <li><img src="/Taslar/10.gif" alt="Piyon" height="30px" width="30px" id="s_kalesag" ></li>           
        </ul>
 
        <ul class="s_at">
            <li><img src="/Taslar/11.gif" alt="Piyon" height="30px" width="30px"  ></li>
            <li><img src="/Taslar/11.gif" alt="Piyon" height="30px" width="30px" id="s_atsag" ></li>           
        </ul>
        <ul class="s_fil">
            <li><img src="/Taslar/12.gif" alt="Piyon" height="30px" width="30px"  ></li>
            <li><img src="/Taslar/12.gif" alt="Piyon" height="30px" width="30px" id="s_filsag" ></li>           
        </ul>
        <ul>
            <li><img src="/Taslar/13.gif" alt="Piyon" height="30px" width="30px" id="s_vezir"></li>
            <li><img src="/Taslar/14.gif" alt="Piyon" height="30px" width="30px" id="s_sah"></li>
        </ul>
 
 
        <ul class="b_piyon">
            <li><img src="/Taslar/1.gif" alt="Piyon" height="30px" width="30px" ></li>
            <li><img src="/Taslar/1.gif" alt="Piyon" height="30px" width="30px" ></li>
            <li><img src="/Taslar/1.gif" alt="Piyon" height="30px" width="30px" ></li>
            <li><img src="/Taslar/1.gif" alt="Piyon" height="30px" width="30px" ></li>
            <li><img src="/Taslar/1.gif" alt="Piyon" height="30px" width="30px" ></li>
            <li><img src="/Taslar/1.gif" alt="Piyon" height="30px" width="30px" ></li>
            <li><img src="/Taslar/1.gif" alt="Piyon" height="30px" width="30px" ></li>
            <li><img src="/Taslar/1.gif" alt="Piyon" height="30px" width="30px" ></li>
        </ul>
        <ul class="b_kale">
            <li><img src="/Taslar/2.gif" alt="Kale" height="30px" width="30px"  ></li>
            <li><img src="/Taslar/2.gif" alt="Kale" height="30px" width="30px" id="b_kalesag" ></li>           
        </ul>
 
        <ul class="b_at">
            <li><img src="/Taslar/3.gif" alt="At" height="30px" width="30px"  ></li>
            <li><img src="/Taslar/3.gif" alt="At" height="30px" width="30px" id="b_atsag" ></li>           
        </ul>
        <ul class="b_fil">
            <li><img src="/Taslar/4.gif" alt="Fil" height="30px" width="30px"  ></li>
            <li><img src="/Taslar/4.gif" alt="Fil" height="30px" width="30px" id="b_filsag" ></li>           
        </ul>
        <ul>
            <li><img src="/Taslar/5.gif" alt="Vezir" height="30px" width="30px" id="b_vezir"></li>
            <li><img src="/Taslar/6.gif" alt="Sah" height="30px" width="30px" id="b_sah"></li>
        </ul>
        
        <input type="button" value="Oynat" id="button">
        
        <div id="t1"><input type="text" alt="t1"/></div>
        <div id="t2"><input type="text" alt="t2"/></div>
              
        <p>Merhaba Dünya</p>
    </body>
</html>

