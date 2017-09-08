<?php
class InvoicepdfArticleSummaryAspaypal extends InvoicepdfArticleSummaryAspaypal_parent
{
    protected function _setPaymentMethodInfo(&$iStartPos)
    {
        $oPayment = oxNew('oxpayment');
        $oPayment->loadInLang($this->_oData->getSelectedLang(), $this->_oData->oxorder__oxpaymenttype->value);

        $text = $this->_oData->translate('ORDER_OVERVIEW_PDF_SELPAYMENT') . $oPayment->oxpayments__oxdesc->value;
        $oBillData = oxNew("agppbankdata");
        if ($oBillData->loadByOrderId($this->_oData->oxorder__oxid->value))
        {
            $text = $this->_oData->translate('ORDER_OVERVIEW_PDF_SELPAYMENT').' '.$this->_oData->translate('AG_PAYPAL_PAY_INVOICE');
        }
        $this->font($this->getFont(), '', 10);
        $this->text(15, $iStartPos + 4, $text);
        $iStartPos += 4;
    }
    protected function _setPayUntilInfo(&$iStartPos)
    {
        $oBillData = oxNew("agppbankdata");
        if ($oBillData->loadByOrderId($this->_oData->oxorder__oxid->value))
        {
            $off = 62;
            $text = $this->_oData->translate('AG_PAYPAL_ACCOUNT_HOLDER').":";
            $this->font($this->getFont(), '', 10);
            $this->text(15, $iStartPos + 4, $text);

            $this->font($this->getFont(), 'B', 10);
            $this->text($off, $iStartPos + 4, $oBillData->agppbankdata__oxaccountholder->value);

            $iStartPos += 4;

            $text = $this->_oData->translate('AG_PAYPAL_BANK').": ";
            $this->font($this->getFont(), '', 10);
            $this->text(15, $iStartPos + 4, $text);

            $this->font($this->getFont(), 'B', 10);
            $this->text($off, $iStartPos + 4, $oBillData->agppbankdata__oxbankname->value);

            $iStartPos += 4;

            $text = $this->_oData->translate('AG_PAYPAL_BIC').": ";
            $this->font($this->getFont(), '', 10);
            $this->text(15, $iStartPos + 4, $text);

            $this->font($this->getFont(), 'B', 10);
            $this->text($off, $iStartPos + 4, $oBillData->agppbankdata__oxbic->value);

            $iStartPos += 4;

            $text = $this->_oData->translate('AG_PAYPAL_IBAN').": ";
            $this->font($this->getFont(), '', 10);
            $this->text(15, $iStartPos + 4, $text);

            $this->font($this->getFont(), 'B', 10);
            $this->text($off, $iStartPos + 4, $oBillData->agppbankdata__oxaccount->value);

            $iStartPos += 4;

            $text = $this->_oData->translate('AG_PAYPAL_REFERENCE').": ";
            $this->font($this->getFont(), '', 10);
            $this->text(15, $iStartPos + 4, $text);

            $this->font($this->getFont(), 'B', 10);
            $this->text($off, $iStartPos + 4, $oBillData->agppbankdata__oxreference->value);

            $iStartPos += 4;

            $text = $this->_oData->translate('AG_PAYPAL_DUEDATE').": ";
            $this->font($this->getFont(), '', 10);
            $this->text(15, $iStartPos + 4, $text);

            $this->font($this->getFont(), 'B', 10);
            $this->text($off, $iStartPos + 4, date('d.m.Y', strtotime($oBillData->agppbankdata__oxduedate->value)));

            $iStartPos += 4;
        }
        else
        {
            parent::_setPayUntilInfo($iStartPos);
        }
    }
}