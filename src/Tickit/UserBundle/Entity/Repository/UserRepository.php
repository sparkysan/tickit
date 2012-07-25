<?php

namespace Tickit\UserBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;
use DateTime;

class UserRepository extends EntityRepository
{

    /**
     * Finds a user that has been active in the last X minutes (determined by the $minutes parameter)
     *
     * @param  string $sessionToken The session ID of the user to find
     * @param  int    $minutes   The number of maximum number of minutes since the last activity
     * @return \Tickit\UserBundle\Entity\User
     */
    public function findActiveUserBySessionToken($sessionToken, $minutes = 15)
    {
        $seconds = $minutes * 60;
        $lastActive = new DateTime(strtotime('Y-m-d H:i:s'));
        $lastActive->modify("-{$seconds} seconds");
        $lastActiveDate = $lastActive->format('Y-m-d H:i:s');

        $user = $this->getEntityManager()
                     ->createQuery(
                        'SELECT u.id, u.username, u.email, u.session_token, u.last_activity FROM Tickit\UserBundle\Entity\User u
                            WHERE u.last_activity >= :last_active
                            AND u.session_token LIKE :session_token
                        '
                     )
                     ->setParameter('last_active', $lastActiveDate)
                     ->setParameter('session_token', $sessionToken)
                     ->execute();
        return $user;
    }

}
