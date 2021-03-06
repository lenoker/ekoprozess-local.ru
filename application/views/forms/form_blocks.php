<div class="clearfix form_cols" id="accordion">
  <form
    class="form-horizontal <?=(isset($vars['class']) ? $vars['class'] : '');?>"
    action="<?=$vars['action'];?>"
    method="<?=$vars['method'];?>"
    target="<?=$vars['target'];?>"
    enctype="<?=$vars['enctype'];?>"
    <?=($vars['onsubmit'] ? ' onSubmit="'. $vars['onsubmit'] .'"' : '');?>
  >
    <div class="form-error"></div>
    <div class="col-md-6">
      <? foreach ($vars['blocks'] as $num=> $block) { ?>
        <? if (!isset($block['col']) || (isset($block['col']) && $block['col'] != 2)) { ?>
          <div class="panel <?=(isset($block['class']) ? ' '. $block['class'] : '');?>">
            <? if (isset($block['title']) && $block['title']) { ?>
              <div class="panel-heading clearfix">
                <div class="panel-heading__top_btn">
                  <a role="button" 
                    data-toggle="collapse" 
                    data-parent="#accordion" 
                    href="#collapse<?=$num;?>" 
                    aria-expanded="<?=(@$block['aria-expanded'] === FALSE ? 'false' : 'true');?>" 
                    aria-controls="collapse<?=$num;?>">
                    <?=(@$block['aria-expanded'] === FALSE ? '<span class="glyphicon glyphicon-plus"></span> ' : '<span class="glyphicon glyphicon-minus"></span> ');?>
                  </a>
                </div>
                <? if (isset($block['title_btn']) && $block['title_btn']) { ?>
                  <h4 class="pull-left">
                    <a role="button" 
                      data-toggle="collapse" 
                      data-parent="#accordion" 
                      href="#collapse<?=$num;?>" 
                      aria-expanded="<?=(@$block['aria-expanded'] === FALSE ? 'false' : 'true');?>" 
                      aria-controls="collapse<?=$num;?>">
                      <?=$block['title'];?>
                    </a>
                  </h4>
                  <?=$block['title_btn'];?>
                <? } else { ?>
                  <h4>
                    <a role="button" 
                      data-toggle="collapse" 
                      data-parent="#accordion" 
                      href="#collapse<?=$num;?>" 
                      aria-expanded="<?=(@$block['aria-expanded'] === FALSE ? 'false' : 'true');?>" 
                      aria-controls="collapse<?=$num;?>">
                      <?=$block['title'];?>
                    </a>
                  </h4>   
                <? } ?>
              </div>
            <? } ?>
            <div id="collapse<?=$num;?>" class="panel-collapse collapse <?=(@$block['aria-expanded'] === FALSE ? '' : 'in');?>" role="tabpanel" aria-labelledby="heading<?=$num;?>">
              <div class="panel-body clearfix">
                <div class="panel-body__fields panel-body__fields_close <?=(isset($block['small']) && $block['small'] ? 'panel-body_sm'  : '');?>">
                  <?=$block['fields'];?>
                </div>
                <div class="panel-body__fields_more">
                  <? if (isset($block['small']) && $block['small']) { ?>
                    <a href="javascript:void(0)" onclick="togglePanel(this);">
                      <span class="glyphicon glyphicon-menu-down"></span> развернуть
                    </a>
                  <? } ?>
                </div>
              </div>
            </div>
          </div>
        <? } ?>
      <? } ?>
    </div>
    <div class="col-md-6">
      <? foreach ($vars['blocks'] as $num=> $block) { ?>
        <? if (isset($block['col']) && $block['col'] == 2) { ?>
          <div class="panel <?=(isset($block['class']) ? ' '. $block['class'] : '');?>">
            <? if (isset($block['title']) && $block['title']) { ?>
              <div class="panel-heading clearfix">
                <div class="panel-heading__top_btn">
                  <a role="button" 
                    data-toggle="collapse" 
                    data-parent="#accordion" 
                    href="#collapse<?=$num;?>" 
                    aria-expanded="<?=(@$block['aria-expanded'] === FALSE ? 'false' : 'true');?>" 
                    aria-controls="collapse<?=$num;?>">
                    <?=(@$block['aria-expanded'] === FALSE ? '<span class="glyphicon glyphicon-plus"></span> ' : '<span class="glyphicon glyphicon-minus"></span> ');?>
                  </a>
                </div>
                <? if (isset($block['title_btn']) && $block['title_btn']) { ?>
                  <h4 class="pull-left">
                    <a role="button" 
                      data-toggle="collapse" 
                      data-parent="#accordion" 
                      href="#collapse<?=$num;?>" 
                      aria-expanded="<?=(@$block['aria-expanded'] === FALSE ? 'false' : 'true');?>" 
                      aria-controls="collapse<?=$num;?>">
                      <?=$block['title'];?>
                    </a>
                  </h4>
                  <?=$block['title_btn'];?>
                <? } else { ?>
                  <h4>
                    <a role="button" 
                      data-toggle="collapse" 
                      data-parent="#accordion" 
                      href="#collapse<?=$num;?>" 
                      aria-expanded="<?=(@$block['aria-expanded'] === FALSE ? 'false' : 'true');?>" 
                      aria-controls="collapse<?=$num;?>">
                      <?=$block['title'];?>
                    </a>
                  </h4>
                <? } ?>
              </div>
            <? } ?>
            <div id="collapse<?=$num;?>" class="panel-collapse collapse <?=(@$block['aria-expanded'] === FALSE ? '' : 'in');?>" role="tabpanel" aria-labelledby="heading<?=$num;?>">
              <div class="panel-body clearfix">
                <div class="panel-body__fields panel-body__fields_close <?=(isset($block['small']) && $block['small'] ? 'panel-body_sm'  : '');?>">
                  <?=$block['fields'];?>
                </div>
                <div class="panel-body__fields_more">
                  <? if (isset($block['small']) && $block['small']) { ?>
                    <a href="javascript:void(0)" onclick="togglePanel(this);">
                      <span class="glyphicon glyphicon-menu-down"></span> развернуть
                    </a>
                  <? } ?>
                </div>
              </div>
            </div>
          </div>
        <? } ?>
      <? } ?>
    </div>
  </form>
</div>