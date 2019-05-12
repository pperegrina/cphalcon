<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Firewall\Adapter\Acl;

use UnitTester;

class SetEventsManagerCest
{
    /**
     * Tests Phalcon\Firewall\Adapter\Acl :: setEventsManager()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-12
     */
    public function firewallAdapterAclSetEventsManager(UnitTester $I)
    {
        $I->wantToTest('Firewall\Adapter\Acl - setEventsManager()');

        $I->skipTest('Need implementation');
    }
}
