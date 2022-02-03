<?php

namespace ContainerXn1uG67;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolderebae3 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer644c2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties13d72 = [
        
    ];

    public function paginate($target, int $page = 1, int $limit = 10, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer644c2 && ($this->initializer644c2->__invoke($valueHolderebae3, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer644c2) || 1) && $this->valueHolderebae3 = $valueHolderebae3;

        if ($this->valueHolderebae3 === $returnValue = $this->valueHolderebae3->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializer644c2 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderebae3) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderebae3 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer644c2 && ($this->initializer644c2->__invoke($valueHolderebae3, $this, '__get', ['name' => $name], $this->initializer644c2) || 1) && $this->valueHolderebae3 = $valueHolderebae3;

        if (isset(self::$publicProperties13d72[$name])) {
            return $this->valueHolderebae3->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderebae3;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderebae3;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer644c2 && ($this->initializer644c2->__invoke($valueHolderebae3, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer644c2) || 1) && $this->valueHolderebae3 = $valueHolderebae3;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderebae3;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderebae3;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer644c2 && ($this->initializer644c2->__invoke($valueHolderebae3, $this, '__isset', array('name' => $name), $this->initializer644c2) || 1) && $this->valueHolderebae3 = $valueHolderebae3;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderebae3;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderebae3;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer644c2 && ($this->initializer644c2->__invoke($valueHolderebae3, $this, '__unset', array('name' => $name), $this->initializer644c2) || 1) && $this->valueHolderebae3 = $valueHolderebae3;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderebae3;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderebae3;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer644c2 && ($this->initializer644c2->__invoke($valueHolderebae3, $this, '__clone', array(), $this->initializer644c2) || 1) && $this->valueHolderebae3 = $valueHolderebae3;

        $this->valueHolderebae3 = clone $this->valueHolderebae3;
    }

    public function __sleep()
    {
        $this->initializer644c2 && ($this->initializer644c2->__invoke($valueHolderebae3, $this, '__sleep', array(), $this->initializer644c2) || 1) && $this->valueHolderebae3 = $valueHolderebae3;

        return array('valueHolderebae3');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer644c2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer644c2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer644c2 && ($this->initializer644c2->__invoke($valueHolderebae3, $this, 'initializeProxy', array(), $this->initializer644c2) || 1) && $this->valueHolderebae3 = $valueHolderebae3;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderebae3;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderebae3;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
