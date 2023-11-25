<?php

namespace App\Traits;

class CosineSimilarity
{
    /**
     * Dot product
     *
     * @param $vector_a
     * @param $vector_b
     *
     * @return float|int
     */
    function dot($vector_a, $vector_b): float|int
    {
        $product = 0;
        $length  = count($vector_a);
        for ($i = 0; $i < $length; $i++) {
            $product += $vector_a[$i] * $vector_b[$i];
        }
        return $product;
    }

    /**
     * Euclidean norm
     *
     * @param $vector
     *
     * @return float
     */
    function norm($vector): float
    {
        $norm   = 0.0;
        $length = count($vector);
        for ($i = 0; $i < $length; $i++) {
            $norm += $vector[$i] * $vector[$i];
        }

        return sqrt($norm);
    }

    /**
     * @param $vector_a
     * @param $vector_b
     *
     * @return float|int
     */
    function cosine_similarity($vector_a, $vector_b): float|int
    {
        $dot_product = $this->dot($vector_a, $vector_b);

        $norm_a      = $this->norm($vector_a);
        $norm_b      = $this->norm($vector_b);
        echo "norm_a: $norm_a\nnorm_b: $norm_b\n";
        $similarity = $dot_product / ($norm_a * $norm_b);

        return $similarity;
    }
}
