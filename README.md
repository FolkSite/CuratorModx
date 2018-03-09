#Хранитель Modx (вообще, то любой переменной)  

## Подключение  

В терминале

``` 
composer require indeximstudio/curator-modx
```  

### Процедурный стиль  

Заносим переменную в класс  

```
CuratorModx::setModx($modx)
```  

Пользуемся переменной  

```
CuratorModx::getModx()
```  

### В классах  

Так же класс можно унаследовать и обращаться к переменной с помощью метода  

```
self::setModx()
```
и

```
self::getModx()
```
или как в процедурном стиле, через имя класса