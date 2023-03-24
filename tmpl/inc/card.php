<?php

defined('_JEXEC') or die;

setlocale(LC_ALL, "es_ES");
$date = new DateTime(substr($item['FechaPublicacion'], 0, -10));

?>

<div class="w-full px-3 py-3 bg-white hover:bg-slate-100  rounded-md my-2 border shadow-sm pb-2">
    <div class="flex flex-col md:flex-row items-center justify-between">
        <div class="md:w-3/4 flex md:block flex-col  justify-content-center">
            <span class="font-bold block text-black mb-2 text-center md:!text-left "><?= $item['CodigoProceso']; ?></span>
            <span class="px-3 py-2 text-sm text-blue-800 bg-blue-200 rounded-full text-center ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15" height="15" class="fill-blue-800">
                    <path d="M304 48c0-26.5-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48s48-21.5 48-48zm0 416c0-26.5-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48s48-21.5 48-48zM48 304c26.5 0 48-21.5 48-48s-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48zm464-48c0-26.5-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48s48-21.5 48-48zM142.9 437c18.7-18.7 18.7-49.1 0-67.9s-49.1-18.7-67.9 0s-18.7 49.1 0 67.9s49.1 18.7 67.9 0zm0-294.2c18.7-18.7 18.7-49.1 0-67.9S93.7 56.2 75 75s-18.7 49.1 0 67.9s49.1 18.7 67.9 0zM369.1 437c18.7 18.7 49.1 18.7 67.9 0s18.7-49.1 0-67.9s-49.1-18.7-67.9 0s-18.7 49.1 0 67.9z" />
                </svg>

                <?= $item['EstadoProceso']; ?>
            </span>


            <div>
                <p class="mt-3 text-sm text-gray-900 text-center md:!text-left">
                    <?= $item['Descripcion']; ?>
                </p>

                <span class="py-1 text-sm text-blue-800 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg"  class="fill-blue-800 " width="15" height="15" viewBox="0 0 448 512">
                        <path d="M96 32V64H48C21.5 64 0 85.5 0 112v48H448V112c0-26.5-21.5-48-48-48H352V32c0-17.7-14.3-32-32-32s-32 14.3-32 32V64H160V32c0-17.7-14.3-32-32-32S96 14.3 96 32zM448 192H0V464c0 26.5 21.5 48 48 48H400c26.5 0 48-21.5 48-48V192z" />
                    </svg>
                    Publicado el <?= $date->format('l, j \\d\\e F \\d\\e Y');  ?>
                </span>
            </div>
        </div>

        <div>
            <a href="<?= $item['URL']; ?>" target="_blank" rel="noopener noreferrer" class="
            hover:opacity-75
            text-decoration-none
          bg-blue-900 
          text-white 
            p-3
            uppercase 
            rounded-full" <?php if ($btnColor) {
                                echo 'style="background-color:' . $btnColor . ';"';
                            }  ?>>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                    <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
                    <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
                </svg>

                Ver detalles</a>
        </div>
    </div>
</div>