<?php
declare(strict_types=1);
namespace GiocoPlus\BoleCard\Contract;
/**
 * 交易
 */
interface PgSoftServiceInterface {

    /**
     * 遊戲啟動
     * @param string $op_code
     * @param string $account
     * @param string $game_code
     * @return mixed
     */
    function gameLaunch(string $op_code, string $account, string $game_code);

    /**
     * 遊戲詳情
     * @param string $op_code
     * @param string $account
     * @param string $bet_id
     * @return mixed
     */
    function gameDetail(string $op_code, string $account, string $bet_id);

}

