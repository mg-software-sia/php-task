<?php

interface PortfolioInterface
{
    /**
     * @return array
     */
    public function getInvestments(): array;

    /**
     * @param OpportunityInterface $opportunity
     * @param int $shares
     * @return void
     */
    public function invest(OpportunityInterface $opportunity, int $shares): void;

    /**
     * User is able to sell investment
     * @param OpportunityInterface $opportunity
     * @param int $shares
     * @return void
     */
    public function sell(OpportunityInterface $opportunity, int $shares): void;

    public function getTotalValue();
}
