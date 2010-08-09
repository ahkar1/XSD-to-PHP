<?php
namespace oasis\names\specification\ubl\schema\xsd\CommonAggregateComponents_2;

/**
 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2
 * @xmlType 
 * @xmlName RoadTransportType
 * @xmlComponentType ABIE
 * @xmlDictionaryEntryName Road Transport. Details
 * @xmlDefinition Describes a road transport vehicle.
 * @xmlObjectClass Road Transport
 */
class RoadTransportType
	{

	
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Road Transport. License Plate Identifier. Identifier
	 * @Definition Identifies a specific vehicle.
	 * @Cardinality 1
	 * @ObjectClass Road Transport
	 * @PropertyTerm License Plate Identifier
	 * @RepresentationTerm Identifier
	 * @DataType Identifier. Type
	 * @AlternativeBusinessTerms Vehicle registration number (WCO ID 167)
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 1
	 * @xmlMaxOccurs 1
	 * @xmlName LicensePlateID
	 * @var LicensePlateID
	 */
	public $LicensePlateID;


} // end class RoadTransportType
