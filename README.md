# Magento 2 - Organizar a Lista de Produtos (Categorias) por Menor Preço e Maior Preço

Esse modulo permite introduzir mais duas formas de ordenação de produtos, por menor preço e maior preço.

## Primeiros Passos

Faça o <a href="https://github.com/MestreMagento/magento2-sort-price-low-high/archive/master.zip">download do repositório</a> e coloque dentro da pasta /app/code/<b>MestreMagento</b>/<b>SortPriceLowHigh/</b>.

### Ambiente/Versão

Este módulo atende as verões:
Magento 2.0.x / 2.1.x / 2.2.x

### Instalação

Faça o download do repositório <a href="https://github.com/MestreMagento/magento2-sort-price-low-high/archive/master.zip">aqui</a>.

Extraia os arquivos na pasta que indicamos abaixo:
```
/app/code/MestreMagento/SortPriceLowHigh/
```

Coloque sua loja em modo desenvolvimento:
```
php bin/magento deploy:mode:set developer
```

Ative o modulo:
```
php bin/magento module:enable -c MestreMagento_SortPriceLowHigh
```

Registre o modulo:
```
php bin/magento setup:upgrade
```

Publique os arquivos estáticos:
```
php bin/magento setup:static-content:deploy
```