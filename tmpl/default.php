<?php defined('_JEXEC') or die; ?>

<?php $data = json_decode($data, true); ?>

<?php foreach ($data as $key => $value) { ?>
    <div class="transition border border-blue-50">
        <div class="text-white bg-blue-900 dgcp-accordion-header cursor-pointer transition flex  justify-between  !px-2  py-2 md:!px-5 items-center border !border-t-0 !border-x-0 border-b border-b-slate-100/.2">
            <h3 class="text-xl"><?= $key; ?></h3>
            <i class="fas fa-plus"></i>
        </div>
        <div class="dgcp-accordion-content md:px-2 pt-0 overflow-hidden max-h-0 bg-slate-50">
            <?php foreach ($value as $key => $value) { ?>
                <div class="transition fecha my-1 rounded-lg border border-blue-50">
                    <div class="dgcp-accordion-header cursor-pointer transition flex  justify-between space-x-5 px-3 md:px-5 items-center h-16">
                        <h3 class="text-xl"><?= $key; ?></h3>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="dgcp-accordion-content px-2 pt-0  overflow-hidden max-h-0 rounded-lg ">
                        <?php foreach ($value as $key => $value) { ?>
                            <div class="transition meses rounded-lg border border-blue-50 mb-3">
                                <div class="dgcp-accordion-header cursor-pointer transition flex justify-between space-x-5 px-3 md:px-5 items-center h-16">
                                    <h3 class="text-xl"><?= $key; ?></h3>
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="dgcp-accordion-content px-2 md:px-5 pt-0 overflow-hidden max-h-0">
                                    <?php foreach ($value as $item) {
                                        include('inc/card.php');
                                    } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
<p>* Está página se actualiza cada día a las 8:00 a.m. por parte de la <a class="text-decoration-none" rel="noopener noreferrer" target="_blank" href="https://www.dgcp.gob.do/">Dirección General de Contrataciones Públicas (DGCP)</a>.</p>
<style>
    .dgcp-accordion-content {
        transition: max-height 0.2s ease-out, padding 0.2s ease;
    }
</style>