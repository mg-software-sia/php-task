<?php

interface InvestmentInterface
{
    public function getValue();

    /**
     * @return int
     */
    public function getShares(): int;

    public function getOpportunity(): OpportunityInterface;
}
