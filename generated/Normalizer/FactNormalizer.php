<?php

namespace CatFacts\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class FactNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CatFacts\\Api\\Model\\Fact';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CatFacts\\Api\\Model\\Fact';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \CatFacts\Api\Model\Fact();
        if (\array_key_exists('_id', $data)) {
            $object->setId($data['_id']);
        }
        if (\array_key_exists('__v', $data)) {
            $object->setV($data['__v']);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($data['user']);
        }
        if (\array_key_exists('text', $data)) {
            $object->setText($data['text']);
        }
        if (\array_key_exists('updatedAt', $data)) {
            $object->setUpdatedAt($data['updatedAt']);
        }
        if (\array_key_exists('sendDate', $data)) {
            $object->setSendDate($data['sendDate']);
        }
        if (\array_key_exists('deleted', $data)) {
            $object->setDeleted($data['deleted']);
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($data['source']);
        }
        if (\array_key_exists('used', $data)) {
            $object->setUsed($data['used']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['_id'] = $object->getId();
        }
        if (null !== $object->getV()) {
            $data['__v'] = $object->getV();
        }
        if (null !== $object->getUser()) {
            $data['user'] = $object->getUser();
        }
        if (null !== $object->getText()) {
            $data['text'] = $object->getText();
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updatedAt'] = $object->getUpdatedAt();
        }
        if (null !== $object->getSendDate()) {
            $data['sendDate'] = $object->getSendDate();
        }
        if (null !== $object->getDeleted()) {
            $data['deleted'] = $object->getDeleted();
        }
        if (null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        if (null !== $object->getUsed()) {
            $data['used'] = $object->getUsed();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        return $data;
    }
}