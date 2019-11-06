<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unión del 17 y 18</title>
</head>

<body>
    <?php

    function Calculadora($numero, $baseInicial, $baseFinal)
    {
        $resultado;
        if ($baseInicial == 10) {
            switch ($baseFinal) {
                case 2: {
                        $resultado = decbin($numero);
                        break;
                    }

                case 16: {
                        $resultado = dechex($numero);
                        break;
                    }
                case 8: {
                        $resultado = decoct($numero);
                        break;
                    }
                default: {
                        echo "Debe introducir las bases indicadas de esta manera: 2(binario), 10(decimal), 8(octal) y 16(hexadecimal).";
                    }
            }
        } else {
            if ($baseInicial == 2) {
                switch ($baseFinal) {
                    case 10: {
                            $resultado = bindec($numero);
                            break;
                        }

                    case 16: {
                            $resultado = bin2hex($numero);
                            break;
                        }
                    case 8: {
                            $resultado = bindec($numero);
                            $resultado = decoct($resultado);
                            break;
                        }
                    default: {
                            echo "Debe introducir las bases indicadas de esta manera: 2(binario), 10(decimal), 8(octal) y 16(hexadecimal).";
                        }
                }
            } else {
                if ($baseInicial == 8) {
                    switch ($baseFinal) {
                        case 2: {
                                $resultado = octdec($numero);
                                $resultado = decbin($resultado);
                                break;
                            }

                        case 16: {
                                $resultado = octdec($numero);
                                $resultado = dechex($resultado);
                                break;
                            }
                        case 10: {
                                $resultado = octdec($numero);
                                break;
                            }
                        default: {
                                echo "Debe introducir las bases indicadas de esta manera: 2(binario), 10(decimal), 8(octal) y 16(hexadecimal).";
                            }
                    }
                } else {
                    if ($baseInicial == 16) {
                        switch ($baseFinal) {
                            case 2: {
                                    $resultado = hex2bin($numero);
                                    break;
                                }

                            case 10: {
                                    $resultado = hexdec($numero);
                                    break;
                                }
                            case 8: {
                                    $resultado = hexdec($numero);
                                    $resultado = decoct($resultado);
                                    break;
                                }
                            default: {
                                    echo "Debe introducir las bases indicadas de esta manera: 2(binario), 10(decimal), 8(octal) y 16(hexadecimal).";
                                }
                        }
                    } else {
                        echo "Debe introducir las bases indicadas de esta manera: 2(binario), 10(decimal), 8(octal) y 16(hexadecimal).";
                    }
                }
            }
        }
        return $resultado;
    }


    $resultado = Calculadora(537, 8, 17);

    echo $resultado;
    ?>
</body>

</html>