<?php




/**
 * 切面编程， 和自动代理基本差不多
 * 这是个比较容易理解的案例， 各框架的实现方式不同，可能更优雅
 * 结果是一样的：user类 不需要依赖mail,sms类，不知道它们的存在
 *
 * 通过APO代理，执行user->register时，执行了mail->send, sms->send;
 *
 * 我理解的AOP是一种编程想法， 实现这想法的工具就是动态代理， 编程方法有很多种 
 *
 * 这个AOP代理只针对一个类，实际框架中如果用AOP，有很多地方用的到，所以会变成别的写法。
 *
 * AOP是OOP的一种方式， 如user, mail , sms 都是OOP， 用AOP的方式让他们合作工作
 * 
 */
class AOPProxy{

    public $realSubject;

    public $calls = [];
	
    public function __construct($Target)
    {
        $this->realSubject = $Target;
    }


    public function setBefore($method, $call)
    {
        // $this->calls[$method]['before'] = array_push($call);
        $this->calls[$method]['before'][] = $call;
    }


    public function setAfter($method, $call)
    {
        $this->calls[$method]['after'][] = $call;
    }

    public function __call($method, $params)
    {
        /**
         * 不管用什么样的方式实现的AOP类，这部分逻辑是一样的，
         * 执行目标方法之前，运行一些对象，（可有可无）
         * 执行目标方法
         * 执行目标方法之后，运行一些对象。（可有可无）
         * 
         * 中间件， 代理， 都是同样的作用
         */
        try{
            // before
            if(isset($this->calls[$method]['before'])){
                foreach ($this->calls[$method]['before'] as  $value) {
                    // if(!is_callable($value, $params)){
                    //     throw new Exception("call error", 1);
                    // }
                    call_user_func_array($value, $params);
                }
            }

            $ret = call_user_func_array([$this->realSubject, $method], $params);
            // $ret = $this->realSubject->$method($params);

            //after
            if(isset($this->calls[$method]['after'])){
                foreach ($this->calls[$method]['after'] as  $value) {
                    call_user_func_array($value, $params);
                }
            }
        }catch(\Exception $e) {
            exit($e->getMessage());
        }
        return $ret;
    }
}