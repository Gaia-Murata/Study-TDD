from testCase import TestCase
from wasRun import WasRun
from testResult import TestResult
from testSuite import TestSuite

class TestCaseTest(TestCase):
	def setUp(self):
		self.result = TestResult()

	def testTemplateMethod(self):
		test= WasRun("testMethod")
		test.run(result)
		assert("setUp testMethod tearDown " == test.log)
	
	def testResult(self):
		test = WasRun("testMethod")
		test.run(result)
		assert("1 run, 0 failed" == result.summary())
	
	def testFailedResult(self):
		test = WasRun("testBrokenMethod")
		test.run(result)
		assert("1 run, 1 failed" ==  result.summary())
	
	def testFailedResultFormatting(self):
		result.testStarted()
		result.testFailed()
		assert("1 run, 1 failed" == result.summary())
	
	def testSuite(self):
		suite = TestSuite()
		suite.add(WasRun("testMethod"))
		suite.add(WasRun("testBrokenMethod"))
		suite.run(result)
		assert("2 run, 1 failed" == result.summary())

suite = TestSuite()
suite.add(TestCaseTest("testTemplateMethod"))
suite.add(TestCaseTest("testResult"))
suite.add(TestCaseTest("testFailedResultFormatting"))
suite.add(TestCaseTest("testFailedResult"))
suite.add(TestCaseTest("testSuite"))
result = TestResult()
suite.run(result)
print result.summary()
