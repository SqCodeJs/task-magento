<?php

namespace Task\Banners\Block;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class Banners extends Template implements BlockInterface
{
    protected $_template = "banners.phtml";

    public function getTitle()
    {
        return $this->getData('title');
    }

    public function getAllBannersData()
    {
        $allBannersData = [];
        $bannerRange = range(1, 3);

        foreach ($bannerRange as $bannerNumber) {
            $allBannersData["banner{$bannerNumber}"] = [
                'title' => $this->getData("banner{$bannerNumber}_title"),
                'description' => $this->getData("banner{$bannerNumber}_description"),
                'image' => $this->getData("banner{$bannerNumber}_image"),
            ];
        }

        return $allBannersData;
    }
}
