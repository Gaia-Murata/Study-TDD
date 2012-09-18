from testCase import TestCase
from wasRun import WasRun

class TestCaseTest(TestCase):
	def testRunning(self):
		test= WasRun("testMethod")
		assert(not test.wasRun)
		test.run()
		assert(test.wasRun)

	

TestCaseTest("testRunning").run()
