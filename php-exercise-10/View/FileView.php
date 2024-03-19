<?php
namespace View;

class FileView
{
    public function render()
    {
        $viewView = new FileViewView();
        $createView = new FileCreateView();
        $updateView = new FileUpdateView();
        $deleteView = new FileDeleteView();
        $viewView->render();
        $createView->render();
        $updateView->render();
        $deleteView->render();
    }
}
