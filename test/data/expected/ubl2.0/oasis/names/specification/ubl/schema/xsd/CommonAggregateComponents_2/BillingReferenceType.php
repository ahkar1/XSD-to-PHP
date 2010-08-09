<?php
namespace oasis\names\specification\ubl\schema\xsd\CommonAggregateComponents_2;

/**
 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2
 * @xmlType 
 * @xmlName BillingReferenceType
 * @xmlComponentType ABIE
 * @xmlDictionaryEntryName Billing Reference. Details
 * @xmlDefinition Information directly relating to a related document.
 * @xmlObjectClass Billing Reference
 */
class BillingReferenceType
	{

	
	/**
	 * @ComponentType ASBIE
	 * @DictionaryEntryName Billing Reference. Invoice_ Document Reference. Document Reference
	 * @Definition An associative reference to Invoice.
	 * @Cardinality 0..1
	 * @ObjectClass Billing Reference
	 * @PropertyTermQualifier Invoice
	 * @PropertyTerm Document Reference
	 * @AssociatedObjectClass Document Reference
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName InvoiceDocumentReference
	 * @var InvoiceDocumentReference
	 */
	public $InvoiceDocumentReference;
	/**
	 * @ComponentType ASBIE
	 * @DictionaryEntryName Billing Reference. Self Billed Invoice_ Document Reference. Document Reference
	 * @Definition An associative reference to Self Billed Invoice.
	 * @Cardinality 0..1
	 * @ObjectClass Billing Reference
	 * @PropertyTermQualifier Self Billed Invoice
	 * @PropertyTerm Document Reference
	 * @AssociatedObjectClass Document Reference
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName SelfBilledInvoiceDocumentReference
	 * @var SelfBilledInvoiceDocumentReference
	 */
	public $SelfBilledInvoiceDocumentReference;
	/**
	 * @ComponentType ASBIE
	 * @DictionaryEntryName Billing Reference. Credit Note_ Document Reference. Document Reference
	 * @Definition An associative reference to Credit Note.
	 * @Cardinality 0..1
	 * @ObjectClass Billing Reference
	 * @PropertyTermQualifier Credit Note
	 * @PropertyTerm Document Reference
	 * @AssociatedObjectClass Document Reference
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName CreditNoteDocumentReference
	 * @var CreditNoteDocumentReference
	 */
	public $CreditNoteDocumentReference;
	/**
	 * @ComponentType ASBIE
	 * @DictionaryEntryName Billing Reference. Self Billed Credit Note_ Document Reference. Document Reference
	 * @Definition An associative reference to Self Billed Credit Note.
	 * @Cardinality 0..1
	 * @ObjectClass Billing Reference
	 * @PropertyTermQualifier Self Billed Credit Note
	 * @PropertyTerm Document Reference
	 * @AssociatedObjectClass Document Reference
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName SelfBilledCreditNoteDocumentReference
	 * @var SelfBilledCreditNoteDocumentReference
	 */
	public $SelfBilledCreditNoteDocumentReference;
	/**
	 * @ComponentType ASBIE
	 * @DictionaryEntryName Billing Reference. Debit Note_ Document Reference. Document Reference
	 * @Definition An associative reference to Debit Note.
	 * @Cardinality 0..1
	 * @ObjectClass Billing Reference
	 * @PropertyTermQualifier Debit Note
	 * @PropertyTerm Document Reference
	 * @AssociatedObjectClass Document Reference
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName DebitNoteDocumentReference
	 * @var DebitNoteDocumentReference
	 */
	public $DebitNoteDocumentReference;
	/**
	 * @ComponentType ASBIE
	 * @DictionaryEntryName Billing Reference. Reminder_ Document Reference. Document Reference
	 * @Definition An associative reference to Reminder Document Reference
	 * @Cardinality 0..1
	 * @ObjectClass Billing Reference
	 * @PropertyTermQualifier Reminder
	 * @PropertyTerm Document Reference
	 * @AssociatedObjectClass Document Reference
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName ReminderDocumentReference
	 * @var ReminderDocumentReference
	 */
	public $ReminderDocumentReference;
	/**
	 * @ComponentType ASBIE
	 * @DictionaryEntryName Billing Reference. Additional_ Document Reference. Document Reference
	 * @Definition An associative reference to Additional Document.
	 * @Cardinality 0..1
	 * @ObjectClass Billing Reference
	 * @PropertyTermQualifier Additional
	 * @PropertyTerm Document Reference
	 * @AssociatedObjectClass Document Reference
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName AdditionalDocumentReference
	 * @var AdditionalDocumentReference
	 */
	public $AdditionalDocumentReference;
	/**
	 * @ComponentType ASBIE
	 * @DictionaryEntryName Billing Reference. Billing Reference Line
	 * @Definition An association to Billing Reference Line.
	 * @Cardinality 0..n
	 * @ObjectClass Billing Reference
	 * @PropertyTerm Billing Reference Line
	 * @AssociatedObjectClass Billing Reference Line
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs unbounded
	 * @xmlName BillingReferenceLine
	 * @var BillingReferenceLine
	 */
	public $BillingReferenceLine;


} // end class BillingReferenceType
