<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class ComposerTest extends TestCase
{
    
    /** @test */
    public function test_composer()
    {
        $content_hash = self::getContentHash(file_get_contents($this->root . '/composer.json'));
        
        $lock = json_decode(file_get_contents($this->root . '/composer.lock'), TRUE);
        
        $this->assertSame($content_hash, $lock['content-hash']);
        
        if ($lock['content-hash'] !== $content_hash) {
            echo "Lock file out of date\n";
            exit(1);
        }

        echo "Lock file up to date\n";
        //$response->assertStatus(200);

    }
    protected static function getContentHash($composerFileContents)
    {
        $content = json_decode($composerFileContents, true);

        $relevantKeys = array(
            'name',
            'version',
            'require',
            'require-dev',
            'conflict',
            'replace',
            'provide',
            'minimum-stability',
            'prefer-stable',
            'repositories',
            'extra',
        );

        $relevantContent = array();

        foreach (array_intersect($relevantKeys, array_keys($content)) as $key) {
            $relevantContent[$key] = $content[$key];
        }
        if (isset($content['config']['platform'])) {
            $relevantContent['config']['platform'] = $content['config']['platform'];
        }

        ksort($relevantContent);

        return md5(json_encode($relevantContent));
    }

}
