<?php

    /**
     * Calculate a colour's perceived luminance
     */

    function luminance($R, $G, $B)
    {
        return (.299 * $R) + (.587 * $G) + (.114 * $B);
    }
