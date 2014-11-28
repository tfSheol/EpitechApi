<?php

namespace Epitech;

/**
 * Description of Current
 *
 * @author Sheol
 */
class Current {
    private $_activeLog;
    private $_creditsMin;
    private $_creditsNorm;
    private $_creditsObjectif;
    private $_nslogMin;
    private $_nslogNorm;
    private $_semesterCode;
    private $_semesterNum;
    private $_achievedCredit;
    private $_failedCredit;
    private $_inprogressCredit;
    
    public function __construct($data) {
        $this->_activeLog = $data->current->active_log;
        $this->_creditsMin = $data->current->credits_min;
        $this->_creditsNorm = $data->current->credits_norm;
        $this->_creditsObjectif = $data->current->credits_obj;
        $this->_nslogMin = $data->current->nslog_min;
        $this->_nslogNorm = $data->current->nslog_norm;
        $this->_semesterCode = $data->current->semester_code;
        $this->_semesterNum = $data->current->semester_num;
        $this->_achievedCredit = $data->current->achieved;
        $this->_failedCredit = $data->current->failed;
        $this->_inprogressCredit = $data->current->inprogress;
    }
}
