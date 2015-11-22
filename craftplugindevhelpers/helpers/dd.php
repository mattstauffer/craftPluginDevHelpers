<?php
if ( ! function_exists('dd')) {
    /**
     * Dump the passed variables and end the script.
     *
     * @author Taylor Otwell / Laravel
     * @param  dynamic  mixed
     * @return void
     */
    function dd() {
        array_map(
            function ($x) {
                var_dump($x);
            },
            func_get_args()
        );

        die;
    }
}
