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
                           
                            for ($i=0; $i<9;$i++)
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
                            }
 
            ?>
        </div>

