<?php
require('texts/projects/VerSenDis-Br/vsd/index.php');
require('includes/projects/VerSenDis-Br/vsd/src/tmp.php');  
?>

<script src="dist/js/projects/VerSenDis-Br/vsd/my_app.js"></script>

<div class="masthead">
    <a style="text-decoration:None;" href="index.php"><h1 class="text-muted"><?php echo $title; ?></h1></a>

    <div class="bs-example bs-example-tabs">
    <ul id="myTab" class="nav nav-tabs" style="margin-bottom:5px;">
            <li rel="tooltip" title="<?php echo $tooltip_menu_ferramenta;?>" class="active"><a href="#ferramenta" data-toggle="tab"><?php echo $ferramenta; ?></a></li>
            <li rel="tooltip" title="<?php echo $tooltip_menu_sobre;?>" class=""><a href="#sobre" data-toggle="tab"><?php echo $sobre; ?></a></li>
        </ul>
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade" id="sobre">
		<br/>
                <?php echo $introducao1; ?>
                <?php echo $introducao2; ?>


		<div class="page-header">
			<h3><?php echo $referencias;?></h3>
		</div>
            </div>
            <div class="tab-pane fade active in" id="ferramenta">
		 <div class="list-group-item">
		    <div id="panel-simple">

                        <div class="panel">
                            <button rel="tooltip" title="<?php echo $tooltip_vsd_monodocumento;?>" type="button" class="btn btn-primary btn-mini" onclick="my_app.switch_simple_advanced('simple');"><?php echo $vsd_monodocumento;?></button>
                            <button rel="tooltip" title="<?php echo $tooltip_vsd_multidocumento;?>" type="button" class="btn btn-default btn-mini" onclick="my_app.switch_simple_advanced('advanced');"><?php echo $vsd_multidocumento;?></button>
                        </div>


                    	<div class="well">
                             <div class="list-group-item">
				<div class="form-group">
  					<label for="items_mono"><?php echo $text_monodocumento_selecao; ?></label>
					<select class="form-control" id="items_mono">
						<option value="0">Lesk</option>
    						<option value="1">AgirreSoroa</option>
    						<option value="2">Lesk-Modificado</option>
    						<option value="3">AgirreSoroa-Modificado</option>
  					</select>
				</div>
				<br>
                            	<span class="label label-default"><?php echo $input_sentence; ?></span><textarea id='input_sentence_mono' placeholder="<?php echo $input_sentence_default;?>" name="input_sentence_mono" class="form-control" rows=3></textarea>
                            	<div class="row">
                                	<div class="text-center">

                                    		<br/>
                                    		<div id="submit-simple">
                                        		<button id="button_mono" class="btn btn-default" onclick="vsd.call_java('button_mono');"><?php echo $normalize;?></button>
                                    		</div>
	                                </div>
                            	</div>

                            	<span class="label label-success"><?php echo $normalized_sentence;?></span>
                            	<div contenteditable="false" id="output_sentence_mono" class="form-control uneditable-input" rows=3 disabled style="background-color: white; color:black; height:auto; overflow:visible; min-height:70px;"></div>
				<span class="label label-primary"><?php echo $sense_sentence;?></span>
                            	<div contenteditable="false" id="output_sense_mono" class="form-control uneditable-input" rows=3 disabled style="background-color: white; color:black; height:auto; overflow:visible; min-height:70px;"></div>

                            		<div class="text-center">
                                		<br/>
                                	
                            		</div>
                        	</div>
                    	</div>
                    </div>

                    <div id="panel-advanced" style="display:none;">
                        <div class="panel">
                            <button rel="tooltip" title="<?php echo $tooltip_vsd_monodocumento;?>" type="button" class="btn btn-default btn-mini" onclick="my_app.switch_simple_advanced('simple');"><?php echo $vsd_monodocumento; ?></button>
                            <button rel="tooltip" title="<?php echo $tooltip_vsd_multidocumento;?>" type="button" class="btn btn-primary btn-mini" onclick="my_app.switch_simple_advanced('advanced');"><?php echo $vsd_multidocumento; ?></button>
                        </div>

			<div class="well">
                            <div class="list-group-item">
				<div class="form-group">
  					<label for="items_multi"><?php echo $text_monodocumento_selecao; ?></label>
					<select class="form-control" id="items_multi">
    						<option value="0">Nóbrega</option>
    						<option value="1">Nóbrega-Modificado</option>
  					</select>
				</div>
				<br>
                            	<span class="label label-default"><?php echo $input_sentence; ?></span><textarea id='input_sentence_multi_1' placeholder="<?php echo $input_sentence_default;?>" name="sentence_1" class="form-control" rows=3></textarea>
				<span class="label label-default"><?php echo $input_sentence; ?></span><textarea id='input_sentence_multi_2' placeholder="<?php echo $input_sentence_default;?>" name="sentence_2" class="form-control" rows=3></textarea>
                            	<div class="row">
                                	<div class="text-center">

                                    		<br/>
                                    		<div id="submit-simple">
                                        		<button id="button_multi" class="btn btn-default" onclick="vsd.call_multi_java('button_multi');"><?php echo $normalize;?></button>
                                    		</div>
	                                </div>
                            	</div>

                            	<span class="label label-success"><?php echo $normalized_sentence;?></span>
                            	<div contenteditable="false" id="output_sentence_multi_1" class="form-control uneditable-input" rows=3 disabled style="background-color: white; color:black; height:auto; overflow:visible; min-height:70px;"></div>

				<span class="label label-success"><?php echo $normalized_sentence;?></span>
                            	<div contenteditable="false" id="output_sentence_multi_2" class="form-control uneditable-input" rows=3 disabled style="background-color: white; color:black; height:auto; overflow:visible; min-height:70px;"></div>

				<span class="label label-primary"><?php echo $sense_sentence;?></span>
                            	<div contenteditable="false" id="output_sense_multi" class="form-control uneditable-input" rows=3 disabled style="background-color: white; color:black; height:auto; overflow:visible; min-height:70px;"></div>

                            		<div class="text-center">
                                		<br/>
                                		
                            		</div>
                        	</div>
                    	</div>



                    </div>
		  </div>
            </div>

        </div>
    </div>



</div>

