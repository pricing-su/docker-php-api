<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TaskSpecResourcesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\TaskSpecResources';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Docker\API\Model\TaskSpecResources;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Docker\API\Model\TaskSpecResources();
        if (property_exists($data, 'Limits') && $data->{'Limits'} !== null) {
            $object->setLimits($this->denormalizer->denormalize($data->{'Limits'}, 'Docker\\API\\Model\\ResourceObject', 'json', $context));
        }
        if (property_exists($data, 'Reservations') && $data->{'Reservations'} !== null) {
            $object->setReservations($this->denormalizer->denormalize($data->{'Reservations'}, 'Docker\\API\\Model\\ResourceObject', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getLimits()) {
            $data->{'Limits'} = $this->normalizer->normalize($object->getLimits(), 'json', $context);
        }
        if (null !== $object->getReservations()) {
            $data->{'Reservations'} = $this->normalizer->normalize($object->getReservations(), 'json', $context);
        }

        return $data;
    }
}
