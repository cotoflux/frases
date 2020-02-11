<?php

namespace cotoflux\inspira;

use Illuminate\Support\Collection;

class Inspiracion
{
    public static function frases()
    {
        return Collection::make([
            'Nuestra mayor gloria no es nunca caer, sino elevarnos cada vez que caemos. -Confucio',
            'La magia es creer en ti mismo. Si puedes hacer eso, puedes hacer que suceda cualquier cosa. -Johann Wolfgang von Goethe',
            'No importa qué tan lento vayas, siempre y cuando no te detengas. -Confucio',
            'Aprendí que el coraje no era la ausencia de miedo, sino el triunfo sobre él. El hombre valiente no es el que no siente miedo, sino el que vence ese miedo. -Nelson Mandela',
            ])->random;
    }

}