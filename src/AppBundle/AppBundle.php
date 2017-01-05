<?php

namespace AppBundle;

use AppBundle\DependencyInjection\Compiler\CompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class AppBundle extends Bundle
{

    public function build(ContainerBuilder $builder){
        $builder->addCompilerPass(new CompilerPass());
    }


}
