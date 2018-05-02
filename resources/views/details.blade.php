@extends('master')

  @section('content')



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
     <link rel="stylesheet" href="{{asset('./css/styles.css')}}">
    <title>SmartPrice</title>
  </head>
  <body>
  
  <div id="DIV_1">
  <div id="DIV_2">
    <div id="DIV_3">
      <a href="http://www.mysmartprice.com/mobile/pricelist/mobile-price-list-in-india.html" id="A_4">Mobile Phones</a> / Samsung / 
                      <?php echo ($data->model_name) ?> 
    </div>
    
  </div>
  <div id="DIV_15">
    
   
    <div id="DIV_26">
      
             
                      <?php echo ($data->details) ?>
     
     
    </div>
    <div id="DIV_59">
      <div id="DIV_60">
        <div id="DIV_61">
        </div>
        <div id="DIV_62">
          <img src= "{{asset('images') . '/'.$data->image}}"  >
         
        </div>
        <div id="DIV_64">
          <div id="DIV_65">
            <img src="https://assets.mspcdn.net/t_c-desktop-normal,f_auto,q_auto,d_c:noimage.jpg/c/12867-82-1.jpg" alt="Samsung Galaxy S9" id="IMG_66" />
          </div>
          <div id="DIV_67">
            <img src="https://assets.mspcdn.net/t_c-desktop-normal,f_auto,q_auto,d_c:noimage.jpg/c/12867-82-2.jpg" alt="Samsung Galaxy S9" id="IMG_68" />
          </div>
          <div id="DIV_69">
            <img src="https://assets.mspcdn.net/t_c-desktop-normal,f_auto,q_auto,d_c:noimage.jpg/c/12867-82-3.jpg" alt="Samsung Galaxy S9" id="IMG_70" />
          </div>
          <div id="DIV_71">
            <img src="https://assets.mspcdn.net/t_c-desktop-normal,f_auto,q_auto,d_c:noimage.jpg/c/12867-82-4.jpg" alt="Samsung Galaxy S9" id="IMG_72" />
          </div>
          <div id="DIV_73">
            <img src="https://assets.mspcdn.net/t_c-desktop-normal,f_auto,q_auto,d_c:noimage.jpg/c/12867-82-5.jpg" alt="Samsung Galaxy S9" id="IMG_74" />
          </div>
          <div id="DIV_75">
            <img src="https://img.youtube.com/vi/u2P7mkMLXy0/0.jpg" alt="Samsung Galaxy S9" id="IMG_76" /> <span id="SPAN_77">Video</span>
          </div>
        </div>
      </div>
      <div id="DIV_78">
        <div id="DIV_79">
          <div id="DIV_80">
             <span id="SPAN_81">Best Price:</span> <span id="SPAN_82">Rs:<?php echo ($data->price) ?></span> <span id="SPAN_83"></span>
          </div>
          <div id="DIV_84">
            <div id="DIV_85">
              <div id="DIV_86">
                <div id="DIV_87">
                  COLOURS
                </div>
                <div id="DIV_88">
                  Clear
                </div>
              </div>
              <div id="DIV_89">
                 
                <label id="LABEL_90">
                  <input name="product-color" type="radio" value="black" id="INPUT_91" />
                </label>
                <div id="DIV_92">
                  <span id="SPAN_93"></span>
                </div> 
                <label id="LABEL_94">
                  <input name="product-color" type="radio" value="purple" id="INPUT_95" />
                </label>
                <div id="DIV_96">
                  <span id="SPAN_97"></span>
                </div> 
                <label id="LABEL_98">
                  <input name="product-color" type="radio" value="blue" id="INPUT_99" />
                </label>
                <div id="DIV_100">
                  <span id="SPAN_101"></span>
                </div>
              </div>
            </div>
            <div id="DIV_102">
              <div id="DIV_103">
                <div id="DIV_104">
              SIZES:<?php echo ($data->Size) ?>
                </div>
              </div>
              <div id="DIV_105">
                <div id="DIV_106">
                   <span id="SPAN_107">64 GB</span>
                </div>
                <div id="DIV_108">
                   <span id="SPAN_109">256GB</span>
                </div>
              </div>
            </div>
          </div>
          <div id="DIV_110">
            <div id="DIV_111">
              <div id="DIV_112">
                <div id="DIV_113">
                  <img src="https://assets.mspcdn.net/q_auto/logos/partners/flipkart_store.png" id="IMG_114" alt='' />
                </div>
                <div id="DIV_115">
                  <div id="DIV_116">
                    
                  </div>
                </div>
                <div id="DIV_117">
                  <a rel="nofollow" href="https://www.mysmartprice.com/out/sendtostore.php?mspid=12867&amp;access_point=desktop&amp;l1=c&amp;top_category=electronics&amp;category=mobile&amp;id=301651430&amp;store=flipkart&amp;gts_button_type=top_pricetable" id="A_118"></a>
                </div>
              </div>
            </div>
            <div id="DIV_119">
              <div id="DIV_120">
                <div id="DIV_121">
                  <img src="https://assets.mspcdn.net/q_auto/logos/partners/samsungs9_store.png" id="IMG_122" alt='' />
                </div>
                <div id="DIV_123">
                  <div id="DIV_124">
                    
                  </div>
                </div>
                <div id="DIV_125">
                  <a rel="nofollow" href="https://www.mysmartprice.com/out/sendtostore.php?mspid=12867&amp;access_point=desktop&amp;l1=c&amp;top_category=electronics&amp;category=mobile&amp;id=301495601&amp;store=samsungs9&amp;gts_button_type=top_pricetable" id="A_126"></a>
                </div>
              </div>
            </div>
            <div id="DIV_127">
              <div id="DIV_128">
                <div id="DIV_129">
                  <img src="https://assets.mspcdn.net/q_auto/logos/partners/croma_store.png" id="IMG_130" alt='' />
                </div>
                <div id="DIV_131">

                  <div id="DIV_132">
                   
                  </div>
                </div>

                <div id="DIV_133">
                  <a rel="nofollow" href="https://www.mysmartprice.com/out/sendtostore.php?mspid=12867&amp;access_point=desktop&amp;l1=c&amp;top_category=electronics&amp;category=mobile&amp;id=301670064&amp;store=croma&amp;gts_button_type=top_pricetable" id="A_134"></a>
                </div>
              </div>
            </div>
          </div>
          <div id="DIV_135">
            <h3 id="H3_136">
              Key Specifications
            </h3>
            <ul id="UL_137">
              <li id="LI_138">
                <?php echo ($data->Variant) ?>
              </li>
              <li id="LI_139">
               <?php echo ($data->RAM) ?>
              </li>
              <li id="LI_140">
                <?php echo ($data->Internal) ?>
              </li>
              <li id="LI_141">
               <?php echo ($data->Capacity) ?>
              </li>
              <li id="LI_142">
                <?php echo ($data->Primary) ?> &amp; <?php echo ($data->Front) ?>
              </li>
              <li id="LI_143">
               <?php echo ($data->Size) ?> inch screen
              </li>
              <li id="LI_144">
                <?php echo ($data->SIM) ?>
              </li>
              <li id="LI_145">
                <?php echo ($data->OS) ?>
              </li>
            </ul>
          </div>
          <div id="DIV_146">
            <div id="DIV_147">
              <div id="DIV_148">
                <div id="DIV_149">
                  Offers
                </div>
                <ul id="UL_150">
                  <li id="LI_151">
                    Earn <span id="SPAN_152">₹434</span> cashback on this product<span id="SPAN_153"></span>. (Not applicable for purchases in Amazon) <span id="SPAN_154">i</span> <span id="SPAN_155"><strong id="STRONG_156">Sign up</strong></span>
                  </li>
                </ul>
                <ul id="UL_157">
                  <li id="LI_158">
                    Extra <strong id="STRONG_159">upto 25% cashback</strong> on adding our Chrome extension <span id="SPAN_160">i</span> <span id="SPAN_161"><strong id="STRONG_162">Know more</strong></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="DIV_163">
    <div id="DIV_164">
      <div id="DIV_165">
        <div id="DIV_166">
          <script id="SCRIPT_167">googletag.cmd.push(function() { googletag.display('div-gpt-ad-1486990827467-10'); });
          </script>
          <div id="DIV_168">
            </div>
        </div>
      </div>
      <div id="DIV_170">
          
          
          
          
           <div id="DIV_211">
              <h2 id="H2_212">
                  <?php 

                              $productName=DB::table('categories')->where('id', '=', $data->cat_id)->get();
                              echo $productName[0]->cat_name; 

                        ?></a>


                  <?php 

                              $productName=DB::table('brands')->where('id', '=', $data->brand_id)->get();
                              echo $productName[0]->brand_name; 

                        ?></a> Specifications
              </h2>
              <table id="TABLE_213">
                <tbody id="TBODY_214">
                  <tr id="TR_215">
                    <td colspan="2" id="TD_216">
                      Display
                    </td>
                  </tr>
                  <tr id="TR_217">
                    <td id="TD_218">
                      Display Type
                    </td>
                    <td id="TD_219">
                     <?php echo ($data->display_type) ?>
                    </td>
                  </tr>
                  <tr id="TR_220">
                    <td id="TD_221">
                      Resolution
                    </td>
                    <td id="TD_222">
                     <?php echo ($data->Resolution) ?>
                    </td>
                  </tr>
                  <tr id="TR_223">
                    <td id="TD_224">
                      Size (in inches)
                    </td>
                    <td id="TD_225">
                     <?php echo ($data->Size) ?>
                    </td>
                  </tr>
                  <tr id="TR_226">
                    <td id="TD_227">
                      Pixel Density
                    </td>
                    <td id="TD_228">
                      <?php echo ($data->Pixel_Density) ?>
                    </td>
                  </tr>
                  <tr id="TR_229">
                    <td id="TD_230">
                      Touchscreen type
                    </td>
                    <td id="TD_231">
                      <?php echo ($data->Touchscreen_type) ?>
                    </td>
                  </tr>
                  <tr id="TR_232">
                    <td id="TD_233">
                      Color Reproduction
                    </td>
                    <td id="TD_234">
                      <?php echo ($data->Color_Reproduction) ?>
                    </td>
                  </tr>
                  <tr id="TR_235">
                    <td id="TD_236">
                      Protection
                    </td>
                    <td id="TD_237">
                      <?php echo ($data->Protection) ?>
                    </td>
                  </tr>
                  <tr id="TR_238">
                    <td id="TD_239">
                      Screen to body percentage
                    </td>
                    <td id="TD_240">
                      <?php echo ($data->Screen_to_body_percentage) ?>
                    </td>
                  </tr>
                  <tr id="TR_241">
                    <td colspan="2" id="TD_242">
                      Design and Build
                    </td>
                  </tr>
                  <tr id="TR_243">
                    <td id="TD_244">
                      Dimensions
                    </td>
                    <td id="TD_245">
                      <span id="SPAN_246">5.8</span>x<span id="SPAN_247">2.7</span>x<span id="SPAN_248">0.3 inches</span>
                    </td>
                  </tr>
                  <tr id="TR_249">
                    <td id="TD_250">
                      Weight
                    </td>
                    <td id="TD_251">
                      <span id="SPAN_252"><?php echo ($data->Weight) ?></span>
                    </td>
                  </tr>
                  <tr id="TR_253">
                    <td colspan="2" id="TD_254">
                      Software
                    </td>
                  </tr>
                  <tr id="TR_255">
                    <td id="TD_256">
                      Operating System
                    </td>
                    <td id="TD_257">
                      <?php echo ($data->OS) ?>
                    </td>
                  </tr>
                  <tr id="TR_258">
                    <td colspan="2" id="TD_259">
                      Camera
                    </td>
                  </tr>
                  <tr id="TR_260">
                    <td id="TD_261">
                      Rear Flash
                    </td>
                    <td id="TD_262">
                      <?php echo ($data->realflash) ?>
                    </td>
                  </tr>
                  <tr id="TR_263">
                    <td id="TD_264">
                      Selfie Flash
                    </td>
                    <td id="TD_265">
                      No
                    </td>
                  </tr>
                  <tr id="TR_266">
                    <td id="TD_267">
                      Primary
                    </td>
                    <td id="TD_268">
                      <?php echo ($data->Primary) ?>
                    </td>
                  </tr>
                  <tr id="TR_269">
                    <td id="TD_270">
                      Front
                    </td>
                    <td id="TD_271">
                     <?php echo ($data->Front) ?>
                    </td>
                  </tr>
                  <tr id="TR_272">
                    <td id="TD_273">
                      Video
                    </td>
                    <td id="TD_274">
                     <?php echo ($data->Video) ?>
                    </td>
                  </tr>
                  <tr id="TR_275">
                    <td colspan="2" id="TD_276">
                      Storage
                    </td>
                  </tr>
                  <tr id="TR_277">
                    <td id="TD_278">
                      Internal
                    </td>
                    <td id="TD_279">
                     <?php echo ($data->Internal) ?>
                    </td>
                  </tr>
                  <tr id="TR_280">
                    <td id="TD_281">
                      RAM
                    </td>
                    <td id="TD_282">
                      <?php echo ($data->RAM) ?>
                    </td>
                  </tr>
                  <tr id="TR_283">
                    <td id="TD_284">
                      Expandable
                    </td>
                    <td id="TD_285">
                      <?php echo ($data->Expandable) ?>
                    </td>
                  </tr>
                  <tr id="TR_286">
                    <td colspan="2" id="TD_287">
                      Battery
                    </td>
                  </tr>
                  <tr id="TR_288">
                    <td id="TD_289">
                      Type
                    </td>
                    <td id="TD_290">
                    <?php echo ($data->Type) ?>
                    </td>
                  </tr>
                  <tr id="TR_291">
                    <td id="TD_292">
                      Capacity
                    </td>
                    <td id="TD_293">
                     <?php echo ($data->Capacity) ?>
                    </td>
                  </tr>
                  <tr id="TR_294">
                    <td id="TD_295">
                      Turbo Charge
                    </td>
                    <td id="TD_296">
                      Yes
                    </td>
                  </tr>
                  <tr id="TR_297">
                    <td colspan="2" id="TD_298">
                      Connectivity
                    </td>
                  </tr>
                  <tr id="TR_299">
                    <td id="TD_300">
                      Bluetooth
                    </td>
                    <td id="TD_301">
                      <?php echo ($data->Bluetooth) ?>
                    </td>
                  </tr>
                
                  <tr id="TR_305">
                    <td id="TD_306">
                      3G
                    </td>
                    <td id="TD_307">
                      <?php echo ($data->G3) ?>
                    </td>
                  </tr>
                  <tr id="TR_308">
                    <td id="TD_309">
                      USB
                    </td>
                    <td id="TD_310">
                      <?php echo ($data->USB) ?>
                    </td>
                  </tr>
                  <tr id="TR_311">
                    <td id="TD_312">
                      Voice Over LTE (VoLTE)
                    </td>
                    <td id="TD_313">
                      Yes
                    </td>
                  </tr>
                  <tr id="TR_314">
                    <td id="TD_315">
                      2G
                    </td>
                    <td id="TD_316">
                      <?php echo ($data->G2) ?>
                    </td>
                  </tr>
                  <tr id="TR_317">
                    <td id="TD_318">
                      4G
                    </td>
                    <td id="TD_319">
                      <?php echo ($data->G4) ?>
                    </td>
                  </tr>
                  <tr id="TR_320">
                    <td id="TD_321">
                      SIM Configuration
                    </td>
                    <td id="TD_322">
                      <?php echo ($data->SIM) ?>
                    </td>
                  </tr>
                  <tr id="TR_323">
                    <td id="TD_324">
                      GPS
                    </td>
                    <td id="TD_325">
                      <?php echo ($data->GPS) ?>
                    </td>
                  </tr>
                  <tr id="TR_326">
                    <td id="TD_327">
                      NFC Chipset
                    </td>
                    <td id="TD_328">
                      <?php echo ($data->NFC) ?>
                    </td>
                  </tr>
                  <tr id="TR_329">
                    <td id="TD_330">
                      Infrared
                    </td>
                    <td id="TD_331">
                      <?php echo ($data->Infrared) ?>
                    </td>
                  </tr>
                  <tr id="TR_332">
                    <td colspan="2" id="TD_333">
                      Processor
                    </td>
                  </tr>
                  <tr id="TR_334">
                    <td id="TD_335">
                      Variant
                    </td>
                    <td id="TD_336">
                      <?php echo ($data->Variant) ?>
                    </td>
                  </tr>
                  <tr id="TR_337">
                    <td id="TD_338">
                      Architecture
                    </td>
                    <td id="TD_339">
                      <?php echo ($data->Architecture) ?>
                    </td>
                  </tr>
                  <tr id="TR_340">
                    <td id="TD_341">
                      No of Cores
                    </td>
                    <td id="TD_342">
                      <?php echo ($data->Cores) ?>
                    </td>
                  </tr>
                  <tr id="TR_343">
                    <td id="TD_344">
                      Make
                    </td>
                    <td id="TD_345">
                      <?php echo ($data->Make) ?>
                    </td>
                  </tr>
                  <tr id="TR_346">
                    <td id="TD_347">
                      Frequency
                    </td>
                    <td id="TD_348">
                      <?php echo ($data->Frequency) ?>
                    </td>
                  </tr>
                  <tr id="TR_349">
                    <td id="TD_350">
                      GPU
                    </td>
                    <td id="TD_351">
                      <?php echo ($data->GPU) ?>
                    </td>
                  </tr>
                  <tr id="TR_352">
                    <td colspan="2" id="TD_353">
                      Sensors
                    </td>
                  </tr>
                  <tr id="TR_354">
                    <td id="TD_355">
                      Proximity
                    </td>
                    <td id="TD_356">
                      <?php echo ($data->Proximity) ?>
                    </td>
                  </tr>
                  <tr id="TR_357">
                    <td id="TD_358">
                      Accelerometer
                    </td>
                    <td id="TD_359">
                      <?php echo ($data->Accelerometer) ?>
                    </td>
                  </tr>
                  <tr id="TR_360">
                    <td id="TD_361">
                      Gyroscope
                    </td>
                    <td id="TD_362">
                      <?php echo ($data->Gyroscope) ?>
                    </td>
                  </tr>
                  <tr id="TR_363">
                    <td id="TD_364">
                      Ambient Light
                    </td>
                    <td id="TD_365">
                      <?php echo ($data->Ambient_Light) ?>
                    </td>
                  </tr>
                  <tr id="TR_366">
                    <td id="TD_367">
                      Fingerprint sensor
                    </td>
                    <td id="TD_368">
                      <?php echo ($data->Fingerprint_sensor) ?>
                    </td>
                  </tr>
                  <tr id="TR_369">
                    <td colspan="2" id="TD_370">
                      Sound
                    </td>
                  </tr>
                  <tr id="TR_371">
                    <td id="TD_372">
                      Loudspeaker
                    </td>
                    <td id="TD_373">
                      <?php echo ($data->Loudpeaker) ?>
                    </td>
                  </tr>
                  <tr id="TR_374">
                    <td id="TD_375">
                      Headphones
                    </td>
                    <td id="TD_376">
                      <?php echo ($data->HeadPHones) ?>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          <div id="DIV_377">
              <div id="DIV_378">
                <script id="SCRIPT_380">googletag.cmd.push(function() { googletag.display('div-gpt-above-tech-spec'); });
                  </script>
                <div id="DIV_381">
                    </div>
              </div>
            </div>
         
         
          <div id="DIV_739">
                  <h2 id="H2_740">
                    Samsung Galaxy S9 Price in India
                  </h2>
                  <div id="DIV_741">
                    <div id="DIV_742">
                      <div id="DIV_743">
                        <div id="DIV_744">
                          <div id="DIV_745">
                            <div id="DIV_746">
                            </div>
                          </div>
                          <div id="DIV_747">
                            More details <span id="SPAN_748">»</span>
                          </div>
                          <div id="DIV_749">
                            Offer(s)
                          </div>
                        </div>
                        <div id="DIV_750">
                          <div id="DIV_751">
                            3-5 Days delivery
                          </div>
                          <div id="DIV_752">
                            EMI: <span id="SPAN_753">Available</span>
                          </div>
                        </div>
                        <div id="DIV_754">
                          <div id="DIV_755">
                             <span id="SPAN_756">₹57,900</span>
                          </div>
                          <div id="DIV_757">
                             <span id="SPAN_758">Free</span> Shipping
                          </div>
                        </div>
                        <div id="DIV_759">
                          <a rel="nofollow" href="https://www.mysmartprice.com/out/sendtostore.php?mspid=12867&amp;access_point=desktop&amp;l1=c&amp;top_category=electronics&amp;category=mobile&amp;id=301651430&amp;store=flipkart" id="A_760"></a>
                        </div>
                      </div>
                      <div id="DIV_761">
                      </div>
                    </div>
                    <div id="DIV_762">
                      <div id="DIV_763">
                        <div id="DIV_764">
                          <img src="https://assets.mspcdn.net/q_auto/logos/partners/samsungs9_store.png" alt="samsungs9" id="IMG_765" />
                          <div id="DIV_766">
                            More details <span id="SPAN_767">»</span>
                          </div>
                          <div id="DIV_768">
                            Offer(s)
                          </div>
                        </div>
                        <div id="DIV_769">
                          <div id="DIV_770">
                            3-4 Days delivery
                          </div>
                          <div id="DIV_771">
                            EMI: <span id="SPAN_772">Available</span>
                          </div>
                        </div>
                        <div id="DIV_773">
                          <div id="DIV_774">
                             <span id="SPAN_775">₹57,900</span>
                          </div>
                          <div id="DIV_776">
                             <span id="SPAN_777">Free</span> Shipping
                          </div>
                        </div>
                        <div id="DIV_778">
                          <a rel="nofollow" href="https://www.mysmartprice.com/out/sendtostore.php?mspid=12867&amp;access_point=desktop&amp;l1=c&amp;top_category=electronics&amp;category=mobile&amp;id=301495601&amp;store=samsungs9" id="A_779"></a>
                        </div>
                      </div>
                      <div id="DIV_780">
                      </div>
                    </div>
                    <div id="DIV_781">
                      <div id="DIV_782">
                        <div id="DIV_783">
                          <img src="https://assets.mspcdn.net/q_auto/logos/partners/croma_store.png" alt="croma" id="IMG_784" />
                          <div id="DIV_785">
                            More details <span id="SPAN_786">»</span>
                          </div>
                        </div>
                        <div id="DIV_787">
                          <div id="DIV_788">
                            5-7 Days delivery
                          </div>
                          <div id="DIV_789">
                            EMI: <span id="SPAN_790">Available</span>
                          </div>
                        </div>
                        <div id="DIV_791">
                          <div id="DIV_792">
                             <span id="SPAN_793">₹57,900</span>
                          </div>
                          <div id="DIV_794">
                             <span id="SPAN_795">Free</span> Shipping
                          </div>
                        </div>
                        <div id="DIV_796">
                          <a rel="nofollow" href="https://www.mysmartprice.com/out/sendtostore.php?mspid=12867&amp;access_point=desktop&amp;l1=c&amp;top_category=electronics&amp;category=mobile&amp;id=301670064&amp;store=croma" id="A_797"></a>
                        </div>
                      </div>
                      <div id="DIV_798">
                      </div>
                    </div>
                    <div id="DIV_799">
                      <div id="DIV_800">
                        <div id="DIV_801">
                          <div id="DIV_802">
                            <div id="DIV_803">
                            </div>
                          </div>
                          <div id="DIV_804">
                            More details <span id="SPAN_805">»</span>
                          </div>
                        </div>
                        <div id="DIV_806">
                          <div id="DIV_807">
                            Out Of Stock
                          </div>
                          <form id="FORM_808">
                            <div id="DIV_809">
                              Please enter a valid email address
                            </div>
                            <input type="text" placeholder="Enter Your Email Address" id="INPUT_810" />
                            <input type="submit" value="NOTIFY ME" id="INPUT_811" />
                          </form>
                          <div id="DIV_812">
                            We will notify you when product becomes available.
                          </div>
                        </div>
                        <div id="DIV_813">
                          <div id="DIV_814">
                             <span id="SPAN_815">₹55,900</span>
                          </div>
                          <div id="DIV_816">
                             <span id="SPAN_817">Free</span> Shipping
                          </div>
                        </div>
                        <div id="DIV_818">
                          <a rel="nofollow" href="https://www.mysmartprice.com/out/sendtostore.php?mspid=12867&amp;access_point=desktop&amp;l1=c&amp;top_category=electronics&amp;category=mobile&amp;id=302472573&amp;store=amazon" id="A_819"></a>
                        </div>
                      </div>
                      <div id="DIV_820">
                      </div>
                    </div>
                  </div>
                  <div id="DIV_821">
                    Show More Stores
                  </div>
                </div>
          <div id="DIV_822">
                  <div id="DIV_823">
                    <ul id="UL_824">
                      <li id="LI_825">
                        All prices in the above table are in Indian Rupees.
                      </li>
                      <li id="LI_826">
                        Cashback will not be credited for purchases in Amazon.
                      </li>
                      <li id="LI_827">
                        The <strong id="STRONG_828">latest price of Samsung Galaxy S9</strong> was obtained on 21st April 2018 15:05:50
                      </li>
                      <li id="LI_829">
                        The Samsung Galaxy S9 is available in Croma, Flipkart, Samsungs9, Amazon
                      </li>
                      <li id="LI_830">
                        The price is valid in all major cities of India including Bangalore, Hyderabad, Chennai, Mumbai, Delhi and Pune. Please check instructions at the specific stores for any deviation.
                      </li>
                      <li id="LI_831">
                        Buy <strong id="STRONG_832">Samsung Galaxy S9</strong> online in India for the lowest price. You can also avail the options of Cash on Delivery (COD) and EMI on purchase of this product. Samsung Galaxy S9 is available in Black, Purple, Blue colours across various online stores in India.
                      </li>
                    </ul>
                  </div>
                </div>
          <div id="DIV_833">
                  <script id="SCRIPT_834">googletag.cmd.push(function() { googletag.display("div-gpt-ad-1486990827467-11"); });
                  </script>
                  <div id="DIV_835">
                    </div>
                </div>
          <div id="DIV_837">
                    <div id="DIV_838">
                      <div id="DIV_839">
                        Price History
                      </div>
                    </div>
                    <div id="DIV_840">
                      <div id="DIV_841">
                        <div id="DIV_842">
                        </div>
                        <div id="DIV_843">
                          Loading…
                        </div>
                      </div>
                    </div>
                  </div>
          <div id="DIV_844">
                    Samsung Galaxy S9 Price in India is Rs. 57,900 as on 21st April 2018 15:05:50
                  </div>
          <div id="DIV_845">
                    <div id="DIV_846">
                      <h3 id="H3_847">
                        Popular Mobile Price Lists
                      </h3>
                    </div>
                    <div id="DIV_848">
                      <div id="DIV_849">
                         <a href="/mobile/pricelist/nokia-mobile-price-list-in-india.html" id="A_850">Nokia Mobile Price List</a>
                      </div>
                      <div id="DIV_851">
                         <a href="/mobile/pricelist/samsung-mobile-price-list-in-india.html" id="A_852">Samsung Mobile Price List</a>
                      </div>
                      <div id="DIV_853">
                         <a href="/mobile/pricelist/micromax-mobile-price-list-in-india.html" id="A_854">Micromax Mobile Price List</a>
                      </div>
                      <div id="DIV_855">
                         <a href="/mobile/pricelist/android-mobile-price-list-in-india.html" id="A_856">Android Phones in India</a>
                      </div>
                      <div id="DIV_857">
                         <a href="/mobile/pricelist/sony-mobile-price-list-in-india.html" id="A_858">Sony Mobile Price List</a>
                      </div>
                      <div id="DIV_859">
                         <a href="/mobile/pricelist/htc-mobile-price-list-in-india.html" id="A_860">HTC Mobiles</a>
                      </div>
                      <div id="DIV_861">
                         <a href="/mobile/pricelist/karbonn-mobile-price-list-in-india.html" id="A_862">Karbonn Mobiles</a>
                      </div>
                      <div id="DIV_863">
                         <a href="/mobile/pricelist/xiaomi-mobile-price-list-in-india.html" id="A_864">Mi Mobile Price</a>
                      </div>
                    </div>
                  </div>
          <div id="DIV_865">
                    <div id="DIV_866">
                      <h3 id="H3_867">
                        Other Mobile Price Lists
                      </h3>
                    </div>
                    <div id="DIV_868">
                      <div id="DIV_869">
                         <a href="/mobile/pricelist/lenovo-mobile-price-list-in-india.html" id="A_870">Lenovo Mobile Price</a>
                      </div>
                      <div id="DIV_871">
                         <a href="/mobile/pricelist/vivo-mobile-price-list-in-india.html" id="A_872">Vivo Mobile Price</a>
                      </div>
                      <div id="DIV_873">
                         <a href="/mobile/pricelist/oppo-mobile-price-list-in-india.html" id="A_874">Oppo Mobile Price</a>
                      </div>
                      <div id="DIV_875">
                         <a href="/mobile/pricelist/lyf-mobile-price-list-in-india.html" id="A_876">Lyf Mobile Price</a>
                      </div>
                      <div id="DIV_877">
                         <a href="/mobile/pricelist/lava-mobile-price-list-in-india.html" id="A_878">Lava Mobiles</a>
                      </div>
                      <div id="DIV_879">
                         <a href="/mobile/pricelist/10-or-mobile-price-list-in-india.html" id="A_880">10 or Mobile Price</a>
                      </div>
                    </div>
                  </div>
          <div id="DIV_881">
                    <div id="DIV_882">
                      <h3 id="H3_883">
                        Popular Mobiles
                      </h3>
                    </div>
                    <div id="DIV_884">
                      <div id="DIV_885">
                         <a href="http://www.mysmartprice.com/mobile/xiaomi-redmi-y1-msp13671" id="A_886">Xiaomi Redmi Y1</a>
                      </div>
                      <div id="DIV_887">
                         <a href="http://www.mysmartprice.com/mobile/oneplus-5t-msp13539" id="A_888">OnePlus 5T</a>
                      </div>
                      <div id="DIV_889">
                         <a href="http://www.mysmartprice.com/mobile/xiaomi-redmi-5a-msp13376" id="A_890">Xiaomi Redmi 5A</a>
                      </div>
                      <div id="DIV_891">
                         <a href="http://www.mysmartprice.com/mobile/apple-iphone-x-msp13396" id="A_892">Apple iPhone X</a>
                      </div>
                    </div>
                  </div>
          <div id="DIV_893">
                    <div id="DIV_894">
                      <h3 id="H3_895">
                        Related PriceList
                      </h3>
                    </div>
                    <div id="DIV_896">
                      <div id="DIV_897">
                         <a href="http://www.mysmartprice.com/mobile/pricelist/samsung-octa-core-mobiles-price-list-in-india.html" id="A_898">Samsung Octa Core Mobiles</a>
                      </div>
                      <div id="DIV_899">
                         <a href="http://www.mysmartprice.com/mobile/pricelist/samsung-4g-mobile-price-list-in-india.html" id="A_900">Samsung 4G Mobiles</a>
                      </div>
                      <div id="DIV_901">
                         <a href="http://www.mysmartprice.com/mobile/pricelist/samsung-4gb-ram-mobiles-in-india.html" id="A_902">Samsung 4GB RAM Mobiles</a>
                      </div>
                    </div>
                  </div>
        </div>
      <div id="DIV_903">
                  <div id="DIV_904">
                    <div id="DIV_905">
                      <div id="DIV_906">
                        <div id="DIV_907">
                          <div id="DIV_908">
                            <img src="https://assets.mspcdn.net/q_auto/logos/partners/flipkart_store.png" id="IMG_909" alt='' />
                          </div>
                          <div id="DIV_910">
                            ₹57,900
                          </div>
                        </div><a rel="nofollow" href="https://www.mysmartprice.com/out/sendtostore.php?mspid=12867&amp;access_point=desktop&amp;l1=c&amp;top_category=electronics&amp;category=mobile&amp;id=301651430&amp;store=flipkart&amp;gts_button_type=top_pricetable" id="A_911"></a>
                      </div>
                      <div id="DIV_912">
                        <div id="DIV_913">
                          <img src="https://assets.mspcdn.net/msp-ui/fav-icon/samsungs9.png" id="IMG_914" alt='' /><span id="SPAN_915">Samsungs9</span>
                        </div><a rel="nofollow" href="https://www.mysmartprice.com/out/sendtostore.php?mspid=12867&amp;access_point=desktop&amp;l1=c&amp;top_category=electronics&amp;category=mobile&amp;id=301495601&amp;store=samsungs9&amp;gts_button_type=top_pricetable" id="A_916">₹57,900 ➝</a>
                      </div>
                      <div id="DIV_917">
                        <div id="DIV_918">
                          <img src="https://assets.mspcdn.net/msp-ui/fav-icon/croma.png" id="IMG_919" alt='' /><span id="SPAN_920">Croma</span>
                        </div><a rel="nofollow" href="https://www.mysmartprice.com/out/sendtostore.php?mspid=12867&amp;access_point=desktop&amp;l1=c&amp;top_category=electronics&amp;category=mobile&amp;id=301670064&amp;store=croma&amp;gts_button_type=top_pricetable" id="A_921">₹57,900 ➝</a>
                      </div>
                    </div>
                  </div>
                </div>
    </div>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
@endsection